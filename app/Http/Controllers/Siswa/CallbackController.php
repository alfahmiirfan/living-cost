<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Siswa\ISiswaService;
use App\Models\Transaction;
use Illuminate\Http\Request;
use ZerosDev\TriPay\Callback;
use ZerosDev\TriPay\Client;
use ZerosDev\TriPay\Support\Constant;

class CallbackController extends Controller
{
    protected $merchantCode, $apiKey, $privateKey;

    public function __construct(public ISiswaService $iSiswaService)
    {
        $this->merchantCode = env('TRIPAY_MERCHANT');
        $this->apiKey = env('TRIPAY_API_KEY');
        $this->privateKey = env('TRIPAY_PRIVATE_KEY');
    }

    public function action(Request $request)
    {
        $mode = Constant::MODE_DEVELOPMENT;
        $guzzleOption = [];

        $client = new Client($this->merchantCode, $this->apiKey, $this->privateKey, $mode, $guzzleOption);
        $callback = new Callback($client);

        $callback->enableDebug();

        
        try{
            $callback->validate();
        }catch(\Exception $e){
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage()
            ], 400);
        }
        
        $data = $callback->data();
        // dd($data);
        $check = Transaction::with('siswa')->where('reference', $data->reference)->where('status','UNPAID')->first();
        // dd($check);
        if(!$check){
            return response()->json([
                'status' => 'error',
                'message' => 'Transaction not found' . ' ' . $data->reference
            ], 404);
        }

        if($data->status == 'PAID'){
            $payment = $this->iSiswaService->Payment(id: $check->income_id);
            $updateTransaction = Transaction::where('reference', $data->reference)->update([
                'status' => 'PAID',
            ]);
            $getUpdateTransaction = Transaction::where('reference', $data->reference)->first();
            $response_data = [
                'income' => $payment,
                'transaction' => $getUpdateTransaction
            ];
            // dd($response_data);
            return response()->json([
                'status' => true,
                'message' => 'Transaction Paid' . ' ' . $data->reference,
                'data' => $response_data
            ], 200);
        }elseif($data->status == 'EXPIRED'){
            $updateTransaction = Transaction::where('reference', $data->reference)->update([
                'status' => 'EXPIRED',
            ]);
            if(!$updateTransaction){
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to update transaction' . ' ' . $data->reference
                ], 500);
            }
            return response()->json([
                'status' => false,
                'message' => 'Transaction Expired' . ' ' . $data->reference
            ], 400);
        }elseif($data->status == 'FAILED'){
            $updateTransaction = Transaction::where('reference', $data->reference)->update([
                'status' => 'FAILED',
            ]);
            if(!$updateTransaction){
                return response()->json([
                    'status' => false,
                    'message' => 'Failed to update transaction' . ' ' . $data->reference
                ], 500);
            }
            return response()->json([
                'status' => false,
                'message' => 'Transaction Failed' . ' ' . $data->reference
            ], 400);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Transaction not found' . ' ' . $data->reference
            ], 404);
        }
    }
}
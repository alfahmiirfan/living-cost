<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function __construct(public ISiswaService $iSiswaService, public IIncomeService $iIncomeService)
    {
    }

    public function action(Request $request)
    {
        $user_id = $request->attributes->get('token')->id;
        $siswa = $this->iSiswaService->GetOne(id: $user_id);
        if (!$siswa) {
            return Response::error(message: "Siswa not found", statusCode: 404);
        }
        $income = $this->iIncomeService->GetOne(id: $request->id);
        if (!$income) {
            return Response::error(message: "Income not found", statusCode: 404);
        }
        $harga = $this->iSiswaService->GetHarga();
        if (!$harga) {
            return Response::error(message: "Harga not found", statusCode: 404);
        }
        $payment = $this->iSiswaService->CallTripay(siswa: $siswa, income: $income, harga: $harga->amoung, method: $request->method);
        if ($payment) {
            $transaction = \App\Models\Transaction::create([
                'siswa_id' => $siswa->id,
                'income_id' => $income->id,
                'reference' => $payment['data']['reference'],
                'merchant_ref' => $payment['data']['merchant_ref'],
                'status' => $payment['data']['status'],
                'amount' => $payment['data']['amount'],
            ]);
            if (!$transaction) {
                return Response::error(message: "Failed to create transaction", statusCode: 500);
            }
            return Response::success(data: $payment, message: "Success create payment", statusCode: 200);
        } else {
            return Response::error(message: "Failed to create payment", statusCode: 500);
        }
    }
}

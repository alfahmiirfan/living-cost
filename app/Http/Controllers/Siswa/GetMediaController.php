<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;
use Illuminate\Http\Request;

class GetMediaController extends Controller
{
    public function __construct(public IIncomeService $iIncomeService)
    {
        
    }

    public function action(Request $request)
    {
        $income = $this->iIncomeService->GetOne(id: $request->id);
        if (!$income) {
            return Response::error(message: "Income not found", statusCode: 404);
        }
        if($income->bukti_pembayaran == null){
            return Response::error(message: "Bukti Pembayaran not found", statusCode: 404);
        }
        return $income->getFirstMedia('bukti_pembayaran');
    }
}
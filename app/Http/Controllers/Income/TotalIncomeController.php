<?php

namespace App\Http\Controllers\Income;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;

class TotalIncomeController extends Controller
{
    public function __construct(public IIncomeService $iIncomeService)
    {
        
    }

    public function action()
    {
        $totalIncome = $this->iIncomeService->TotalIncome();
        return Response::success(data: $totalIncome, message: "Total Income", statusCode: 200);
    }
}
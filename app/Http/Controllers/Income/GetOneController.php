<?php

namespace App\Http\Controllers\Income;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;
use Illuminate\Http\Request;

class GetOneController extends Controller
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
        return Response::success(data: $income, message: "Income found", statusCode: 200);
    }
}
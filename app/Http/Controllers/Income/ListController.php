<?php

namespace App\Http\Controllers\Income;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __construct(public IIncomeService $iIncomeService)
    {
        
    }

    public function action(Request $request)
    {
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $search = $request->input('search', null);
        $data = $this->iIncomeService->List(page: $page, limit: $limit, search: $search);
        if($data){
            return Response::success(data: $data, message: "Income found", statusCode: 200);
        }else{
            return Response::error(message: "Income not found", statusCode: 404);
        }
    }
}
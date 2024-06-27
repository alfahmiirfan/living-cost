<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Http\Request;

class GetTransactionController extends Controller
{
    public function __construct(public ISiswaService $iSiswaService)
    {
        
    }

    public function action(Request $request)
    {
        $ref = $request->ref;
        $data = $this->iSiswaService->GetTransaction($ref);
        if (!$data) {
            return Response::error(message: 'Data not found', statusCode: 404);
        }
        return Response::success(data: $data, message: 'Data found');
    }
}
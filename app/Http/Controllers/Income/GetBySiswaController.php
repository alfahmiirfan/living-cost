<?php

namespace App\Http\Controllers\Income;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;
use Illuminate\Http\Request;

class GetBySiswaController extends Controller
{
    public function __construct(public IIncomeService $iIncomeService)
    {
        
    }

    public function action(Request $request)
    {
        $siswa_id = $request->attributes->get('token')->id;
        if (!$siswa_id) {
            return Response::error(message: "Siswa not found", statusCode: 404);
        }
        $data = $this->iIncomeService->GetBySiswa(siswa_id: $siswa_id, year: $request->year);
        if ($data) {
            return Response::success(data: $data, message: "Income found", statusCode: 200);
        } else {
            return Response::error(message: "Income not found", statusCode: 404);
        }
    }
}
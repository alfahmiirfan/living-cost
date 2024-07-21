<?php

namespace App\Http\Controllers\Income;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;
use Illuminate\Http\Request;

class GetYearsController extends Controller
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
        $data = $this->iIncomeService->GetYears(siswa_id: $siswa_id);

        if ($data) {
            return Response::success(data: json_encode($data), message: "Income found", statusCode: 200);
        } else {
            return Response::error(message: "Income not found", statusCode: 404);
        }
    }
}

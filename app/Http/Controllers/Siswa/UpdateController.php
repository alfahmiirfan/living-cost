<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Income\IIncomeService;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __construct(public ISiswaService $iSiswaService)
    {
    }

    public function action(Request $request)
    {
        $siswa = $this->iSiswaService->GetOne(id: $request->id);
        if (!$siswa) {
            return Response::error(message: "Siswa not found", statusCode: 404);
        }
        $data = $this->iSiswaService->Update(
            id: $request->id,
            name: $request->nama,
            nisn: $request->nisn,
            angkatan: $request->angkatan,
            password: $request->password,
            year_id: $request->year_id
        );
        if ($data) {
            return Response::success(data: $data, message: "Siswa updated", statusCode: 200);
        } else {
            return Response::error(message: "Failed to update siswa", statusCode: 500);
        }
    }
}

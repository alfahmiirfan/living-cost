<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Http\Request;

class GetOneController extends Controller
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
        return Response::success(data: $siswa, message: "Siswa found", statusCode: 200);
    }
}

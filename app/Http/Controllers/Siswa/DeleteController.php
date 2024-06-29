<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Http\Request;

class DeleteController extends Controller
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
        $data = $this->iSiswaService->Delete(id: $request->id);
        if ($data) {
            return Response::success(message: "Siswa deleted", statusCode: 200);
        } else {
            return Response::error(message: "Failed to delete siswa", statusCode: 500);
        }
    }
}
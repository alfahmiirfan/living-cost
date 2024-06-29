<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Siswa\ISiswaService;

class GetHargaController extends Controller
{
    public function __construct(public ISiswaService $iSiswaService)
    {
        
    }

    public function action()
    {
        return Response::success(data: $this->iSiswaService->GetHarga());
    }
}
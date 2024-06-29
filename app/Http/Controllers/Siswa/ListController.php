<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\Http\Controllers\Controller;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function __construct(public ISiswaService $iSiswaService)
    {
    }

    public function action(Request $request)
    {
        $page = $request->input('page', 1);
        $limit = $request->input('limit', 10);
        $search = $request->input('search', null);

        $data = $this->iSiswaService->List($page, $limit, $search);

        return Response::success(data: $data, message: 'List Siswa', statusCode: 200);
    }
}

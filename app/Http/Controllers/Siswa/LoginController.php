<?php

namespace App\Http\Controllers\Siswa;

use App\helper\Response;
use App\helper\Token;
use App\Http\Controllers\Controller;
use App\Http\Service\Siswa\ISiswaService;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct(public ISiswaService $iSiswaService)
    {
        
    }

    public function action(Request $request)
    {
        $siswa = $this->iSiswaService->Login(
            nisn: $request->nisn,
            password: $request->password
        );
        if (!$siswa) {
            return Response::error(message: "Siswa not found", statusCode: 404);
        }
        return Response::success(message: "Login Success", statusCode:200,data:[
            'access_token' => Token::encode([
                'id' => $siswa->id,
                'nisn' => $siswa->nisn,
                'name' => $siswa->nama,
                'role' => 'siswa'
            ], 60 * 60 * 24 * 30),
            'refresh_token' => Token::encode([
                'id' => $siswa->id,
                'nisn' => $siswa->nisn,
                'name' => $siswa->nama,
                'role' => 'siswa'
            ], 60 * 60 * 24 * 30 * 12)
        ]);
    }
}
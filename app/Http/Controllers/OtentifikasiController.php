<?php

namespace App\Http\Controllers;

use App\Mail\OtpMailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class OtentifikasiController extends Controller
{
    function LoginView()
    {
        return view('Pages/Login');
    }
    function LupaPasswordView()
    {
        return view('Pages/LupaPassword');
    }
    function NewPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255|email|exists:users,email',
            'otp' => 'required|string|max:255|exists:users,otp',
        ]);

        $user = User::where('email', $request->email)->where('otp', $request->otp)->firstOrFail();

        return view('Pages/NewPassword');
    }
    function Otp(Request $request)
    {
        if ($request->email) {
            $user = User::where('email', $request->email)->firstOrFail();
        }

        return view('Pages/Otp');
    }

    public function login(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|string|max:255|email|exists:users,email',
            'kata_sandi' => 'required|string|max:255',
        ]);

        $user = User::where('email', $request['email'])
            ->firstOrFail();

        if (Hash::check($validasi['kata_sandi'], $user->kata_sandi)) {
            Auth::login($user);

            if ($user->id_admin) {
                // redirect to admin page
                return redirect('/DashboardAdmin');
            } else if ($user->nisn === null) {
                // redirect to super admin page
                return redirect('/');
            }
        }

        return false;
    }

    public function lupaPassword(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|string|max:255|email|exists:users,email',
        ]);

        $user = User::where('email', $request['email'])
            ->firstOrFail();

        try {
            $otp = Str::random(6);

            $user->update(['otp' => $otp]);

            Mail::to($user->email)->send(new OtpMailer($user->toArray()));
        } catch (\Exception $e) {
            $user->update(['otp' => null]);

            return false;
        }

        // redirect to otp verification page
        return true;
    }

    public function otpVerifikasi(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255|email|exists:users,email',
            'otp' => 'required|string|max:255|exists:users,otp',
        ]);

        $user = User::where('email', $request->email)->where('otp', $request->otp)->firstOrFail();

        // redirect to change password page
        return true;
    }

    public function gantiPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|string|max:255|email|exists:users,email',
            'otp' => 'required|string|max:255|exists:users,otp',
            'kata_sandi' => 'required|string|max:255|confirmed',
        ]);

        $user = User::where('email', $request->email)->where('otp', $request->otp)->firstOrFail();

        $user->update(['kata_sandi' => $request->kata_sandi]);

        // redirect to login page
        return true;
    }
}

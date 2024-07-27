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
        if ($request->email === null || $request->otp === null) {
            abort(404);
        }

        $user = User::where('username', $request->email)->where('otp', $request->otp)->firstOrFail();

        return view('Pages/NewPassword', compact('user'));
    }
    function Otp(Request $request)
    {
        if ($request->email === null) {
            abort(404);
        }

        $user = User::where('username', $request->email)->firstOrFail();

        return view('Pages/Otp', compact('user'));
    }

    public function login(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|string|max:255|email|exists:users,username',
            'kata_sandi' => 'required|string|max:255',
        ]);

        $user = User::where('username', $request['email'])
            ->firstOrFail();

        if (Hash::check($validasi['kata_sandi'], $user->password)) {
            Auth::login($user);

            if ($user->id_number) {
                // redirect to admin page
                return redirect('/DashboardAdmin');
            }

            return redirect('/');
        }

        return back () -> withInput() -> withErrors(['email'=>'Email atau Password Salah']) ;
    }

    public function lupaPassword(Request $request)
    {
        $validasi = $request->validate([
            'email' => 'required|string|max:255|email|exists:users,username',
        ]);

        $user = User::where('username', $request['email'])
            ->firstOrFail();

        try {
            $otp = Str::random(6);

            $user->otp = $otp;
            $user->save();

            Mail::to($user->username)->send(new OtpMailer(['otp' => $otp]));
        } catch (\Exception $e) {
            $user->update(['otp' => null]);

            return back();
        }

        // redirect to otp verification page
        return redirect('/Otp?email=' . $user->username);
    }

    public function otpVerifikasi(Request $request)
    {
        $request->validate([
            // 'email' => 'required|string|max:255|email|exists:users,username',
            'otp' => 'required|string|max:255|exists:users,otp',
        ]);

        $user = User::where('username', $request->query('email'))->where('otp', $request->otp)->firstOrFail();

        // redirect to change password page
        return redirect('/NewPassword?email=' . $user->username . '&otp=' . $user->otp);
    }

    public function gantiPassword(Request $request)
    {
        $request->validate([
            // 'email' => 'required|string|max:255|email|exists:users,username',
            // 'otp' => 'required|string|max:255|exists:users,otp',
            'kata_sandi' => 'required|string|max:255|confirmed',
        ]);

        $user = User::where('username', $request->query('email'))->where('otp', $request->query('otp'))->firstOrFail();

        $user->update(['password' => $request->kata_sandi, 'otp' => null]);

        // redirect to login page
        return redirect('/Login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/Login');
    }
}

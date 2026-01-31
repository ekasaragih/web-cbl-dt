<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GateController extends Controller
{
    public function chooseRole()
    {
        return view('gate.choose-role');
    }

    public function setRole(Request $request)
    {
        $request->validate([
            'role' => 'required|in:dosen,mahasiswa'
        ]);

        session([
            'role_pending' => $request->role
        ]);

        return redirect()->route('otp');
    }

    public function otpForm()
    {
        if (!session()->has('role_pending')) {
            return redirect()->route('gate');
        }

        return view('gate.otp');
    }

    public function verifyOtp(Request $request)
    {
        $role = session('role_pending');

        $otpDosen = 'biologiitumenyenangkan';
        $otpMahasiswa = 'semogacepatlulus';

        $request->validate(
            [
                'otp' => 'required'
            ],
            [
                'otp.required' => 'Silakan masukkan OTP terlebih dahulu.'
            ]
        );

        if (
            ($role === 'dosen' && $request->otp === $otpDosen) ||
            ($role === 'mahasiswa' && $request->otp === $otpMahasiswa)
        ) {
            session([
                'role' => $role
            ]);

            session()->forget('role_pending');

            return redirect()->route('beranda');
        }

        return back()->withErrors([
            'otp' => 'OTP salah, harap masukkan OTP yang benar.'
        ]);
    }

    public function signOutRole(Request $request)
    {
        session()->forget('role');
        session()->forget('role_pending');

        // kalau mau bersih total:
        // session()->flush();

        return redirect()->route('gate');
    }

}

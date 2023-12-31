<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function actionregister(Request $request)
    {
        $user = User::create([
            'nik_meninggal' => $request->nik,
            'nama_meninggal' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        toastr()->success("Akun Anda sudah Aktif silahkan Login.");
        return redirect('login');
    }
}

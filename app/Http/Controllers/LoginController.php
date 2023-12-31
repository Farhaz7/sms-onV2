<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yoeunes\Toastr\Facades\Toastr;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'nik_meninggal' => $request->input('nik'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            $user_role=Auth::user()->role;
            if ($user_role == '1') {
                $usersWithUploads = User::where('id','!=',1)->get();
                toastr()->success("Berhasil Login");
                return redirect('dbadmin');
            }

                else if($user_role=='2'){
                    toastr()->success("Berhasil Login");
                    return redirect('dbuser');
                }
                } else {
                    Session::flash('error', 'Email atau password salah');
                    return redirect('/login');
                }
            }
            public function logout(){
                Auth::logout();
                Toastr::success('Anda Telah Logout', 'success');
                return redirect()->route('login');

            }
        }

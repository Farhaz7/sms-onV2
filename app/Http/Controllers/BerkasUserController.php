<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerkasUserController extends Controller
{
    function berkas(){
        return view('user/berkasuser');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SyaratController extends Controller
{
    function syarat(){
        return view('user/syarat');
    }
}

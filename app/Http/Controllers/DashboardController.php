<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function dbuser(){
        return view('user/dbuser');
    }
}
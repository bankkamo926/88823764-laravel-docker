<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CON_dash_manager extends Controller
{
    public function index(){
        return view('dashboardmanager');
    }
}

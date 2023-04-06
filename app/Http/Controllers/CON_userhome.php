<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CON_userhome extends Controller
{
    public function index(){
        return view('userhome');
    }

}

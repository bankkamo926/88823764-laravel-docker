<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CON_login extends Controller
{
    /*
    * CON_login
    * CON_login view to loginhome
    * @author : 64160075
    * @Create Date : 2023-03-11
    */

    public function index(){
        return view('loginhome');
    }

}

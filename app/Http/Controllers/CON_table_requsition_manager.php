<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CON_table_requsition_manager extends Controller
{
    public function index(){
        return view('V_table_requisition_manager');
    }
}

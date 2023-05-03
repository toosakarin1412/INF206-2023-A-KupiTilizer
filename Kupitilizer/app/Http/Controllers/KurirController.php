<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function dashboard(){
        return view('dashboardKurir');
    }

    public function manageKurir(){
        return view('manageKurir');
    }
}

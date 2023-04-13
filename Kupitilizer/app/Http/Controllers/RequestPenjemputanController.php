<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestPenjemputanController extends Controller
{
    public function index(){
        return view('adminpenjemputan');
    }
}

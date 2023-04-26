<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller
{
    public function userHome()
    {
        return view('home');
    }

    public function manageUser(): View
    {
        $users=DB::table('users')->where('role', 'user')->get();
        return view('manageuser',['users'=>$users]);
    }
}

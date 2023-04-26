<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


class AdminController extends Controller
{
    public function adminDashboard(): View
    {
        return view('dashboard');
    }

    public function manageAdmin(): View
    {
        $admin=DB::table('users')->where('role', 'admin')->get();
        return view('manageuser',['users'=>$admin]);
    }
}

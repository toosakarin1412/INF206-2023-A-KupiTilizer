<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
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
        return view('manageadmin',['users'=>$admin]);
    }


    public function addAdmin(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
    ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'admin',
            'password' => Hash::make($request->password),
    ]);

    event(new Registered($user));

    return redirect()->route('manager.manageadmin');
}
}

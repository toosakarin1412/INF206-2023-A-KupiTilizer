<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\View\View;


class UserController extends Controller
{
    public function userHome()
    {
        return view('home');
    }

    /**
     * Mengambil data dari db
     * 
     */
    public function manageUser(): View
    {
        $users=DB::table('users')->where('role', 'user')->get();
        return view('manageuser',['users'=>$users]);
    }
    
    public function add(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);

        return redirect('manager/manageuser')->with('success', 'User berhasil ditambahkan');
    }
    
    public function destroy($email): RedirectResponse
    {
        DB::table('users')->where('email', $email)->delete();
        return redirect('manager/manageuser')->with('success', 'User berhasil dihapus');
    }

    public function show($email): View
    {   $user=DB::table('users')->where('email', $email)->get();
        return view('edituser',['user'=>$user]);
    }

    public function update(Request $request, $email): RedirectResponse
    {   

        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        if($request->email != $email){
            $rules['email'] = ['required', 'string', 'email', 'max:255', 'unique:'.User::class];
        }
        
        $request->validate($rules);

        DB::table('users')->where('email', $email)
            ->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);        
        return redirect('manager/manageuser')->with('success', 'Data user berhasil diedit!');
    }

}

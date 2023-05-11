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

    public function userRequest()
    {
        $data = $data = DB::table('request_jemputs')->where('user_id', Auth::user()->id)->get();
        $beli = DB::table('pembelians')->where('user_id', Auth::user()->id)->get();
        return view('statusPermintaanUser', ['dataRequest' => $data, 'beli' => $beli]);
    }

    /**
     * Mengambil data dari db
     * @return view('manageuser',['users'=>$users])
     * 
     */
    public function manageUser(): View
    {   

        //mengambil data dari database dimana rolenya user
        $users=DB::table('users')->where('role', 'user')->get();

        ///kembali ke laman manage user dengan memberikan data yg telah diambil
        return view('manageuser',['users'=>$users]);
    }
    
    /**
     * 
     * Menambahkan akun user
     * @param Request $request
     * @return redirect('manager/manageuser')->with('success', 'User berhasil ditambahkan')
     * 
     */
    public function add(Request $request): RedirectResponse
    {
        //melakukan validasi inputan
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        //melakukan create user
        $user = User::create([
            'id' => uniqid(),
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'user',
            'password' => Hash::make($request->password),
        ]);

        ///kembali ke laman manage user dengan alert succes
        return redirect()->back()->with('success', 'User berhasil ditambahkan');    
    }
    
    /**
     * 
     * Menghapus akun user
     * @param $email
     * @return redirect('manager/manageuser')->with('success', 'User berhasil dihapus')
     * 
     */
    public function destroy($email): RedirectResponse
    {

        //menghapus akun dari database dimana email sesuai dengan parameter
        DB::table('users')->where('email', $email)->delete();
        
        ///kembali ke laman manage user dengan alert succes
        return redirect()->back()->with('success', 'User berhasil dihapus');
        
    }

    /**
     * 
     * Menampilkan kembali data user pada form edit
     * @param $email
     * @return return view('edituser',['user'=>$user])
     * 
     */
    public function show($email): View
    {   

        //mengambil data dari database dimana emailnya sesuai dengan parameter
        $user=DB::table('users')->where('email', $email)->get();

        //return ke edituser untuk menampilkan laman edit data
        return view('edituser',['user'=>$user]);
    }

    /**
     * 
     * Mengupdate data akun user
     * @param Request $request, $email
     * @return redirect('manager/manageuser')->with('success', 'User berhasil ditambahkan');
     * 
     */
    public function update(Request $request, $email): RedirectResponse
    {   

        //aturan untuk inputan data
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ];

        //rules untuk email jika diganti
        if($request->email != $email){
            $rules['email'] = ['required', 'string', 'email', 'max:255', 'unique:'.User::class];
        }
        
        //validasi inputan dengan rules
        $request->validate($rules);

        //melakukan update data
        DB::table('users')->where('email', $email)
            ->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            ]);        
        
        //kembali ke laman manage user dengan alert succes
        if(Auth::user()->role == "manager"){
            return redirect('manager/manageuser')->with('success', 'Data user berhasil diedit!');
        }else{
            return redirect('admin/manageuser')->with('success', 'Data user berhasil diedit!');

        }
        
    }

}

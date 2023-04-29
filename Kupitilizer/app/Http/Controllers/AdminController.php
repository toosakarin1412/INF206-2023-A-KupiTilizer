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



/**
 * Class controller yang mengatur tampilan dashboard manajemen admin.
 */
class AdminController extends Controller
{
    /**
     * Menampilkan dashboard admin.
     *
     * @return \Illuminate\View\View
     */ 
    public function adminDashboard(): View
    {
        return view('dashboard');
    }

    /**
     * Menampilkan halaman manajemen admin.
     *
     * @return \Illuminate\View\View
     */
    public function manageAdmin(): View
    {
        $admin=DB::table('users')->where('role', 'admin')->get();
        return view('manageadmin',['users'=>$admin]);
    }

    /**
     * Menambahkan admin baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
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

    return redirect()->route('manager.manageadmin')->with('success', 'Admin berhasil ditambahkan');;
}

    /**
     * Menghapus admin dari database.
     *
     * @param  string $email
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($email): RedirectResponse
    {
        DB::table('users')->where('email', $email)->delete();
        return redirect('manager/manageadmin')->with('success', 'Admin berhasil dihapus');
    }

    /**
     * Menampilkan halaman edit admin.
     *
     * @param  string $email
     * @return \Illuminate\View\View
     */
    public function show($email): View
    {   $user=DB::table('users')->where('email', $email)->get();
        return view('editadmin',['user'=>$user]);
    }

    /**
     * Mengupdate data admin yang ada di database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string $email
     * @return \Illuminate\Http\RedirectResponse
     */
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
        return redirect('manager/manageadmin')->with('success', 'Data Admin berhasil diedit!');
    }
}

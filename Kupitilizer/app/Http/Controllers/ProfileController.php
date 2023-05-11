<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function show()
    {
        $data = DB::table('request_jemputs')->where('user_id', Auth::user()->id)->get();
        $beli = DB::table('pembelians')->where('user_id', Auth::user()->id)->get();
        return view('profile', ['dataRequest' => $data, 'beli' => $beli]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function setting(): View
    {
        return view('usersetting');
    }

    public function updateData(Request $request){
       // dd($request);
       DB::table('users')->where('id', Auth::user()->id)
            ->update([
                "name" => $request->name,
                "jeniskelamin" => $request->jeniskelamin,
                "hp" => $request->hp,
                "alamat" => $request->alamat,
                "email" => $request->email,
                "ulang_tahun" => $request->ulang_tahun,
            ]);

        return redirect()->back()->with('success', "Update data berhasil");
    }
}

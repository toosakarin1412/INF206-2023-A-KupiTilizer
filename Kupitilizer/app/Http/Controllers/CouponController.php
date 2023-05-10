<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Coupon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CouponController extends Controller
{

    /**
     * Menampilkan halaman manajemen admin.
     *
     * 
     */
    public function index(){
        $coupons=DB::table('coupons')->get();
        return view('admincoupon',['coupons'=>$coupons]);
    }

    // public function addCoupon(Request $request): RedirectResponse
    // {
    //     $request->validate([
    //         'id'=>['required', 'string', 'max:255'],
    //         'nama_coupon' => ['required', 'string', 'max:255'],
    //         'poin' => ['required', 'integer'],
    //         'deskripsi' => ['string', 'required']
    //         //'masa_berlaku' => ['string', 'required','max:255']
    //         // 'gambar_coupon' => ['string', 'nullable']
    // ]);

    //     $Coupon = Coupon::create([
    //         'id'=>uniqid(),
    //         'nama_coupon' => $request->nama_coupon,
    //         'poin' => $request->poin,
    //         'deskripsi' => $request->deskripsi
    //         //'masa_berlaku' => $request->masa_berlaku,
    //         //'gambar_coupon' => $request->gambar_coupon
    // ]);

    return redirect('admin/managecoupon')->with('success', 'Coupon berhasil ditambahkan');
    }
};
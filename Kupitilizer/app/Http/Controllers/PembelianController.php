<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembelian;
use App\Models\Keranjang;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Carbon\Carbon;

class PembelianController extends Controller
{
    public function index(){
        $data = DB::table('pembelians')->get();
        return view('adminpembelian', ['dataRequest' => $data]);
    }

    public function beli(Request $request){
        $date = Carbon::now();
        // dd($request);
        $keranjang = DB::table('keranjangs')->join('products', 'keranjangs.product_id', '=', 'products.id')->where('user_id', Auth::user()->id)->get();
        $totalBelanja = 0;
        foreach($keranjang as $item){
            $totalBelanja+= ($item->jumlah * $item->harga);
        }

        Pembelian::create([
            'id' => (string)$date->format('ymd').bin2hex(random_bytes(5)),
            'user_id' => Auth::user()->id,
            'total_belanja'=> $totalBelanja,
        ]);

        Keranjang::where('user_id', Auth::user()->id)->delete();

        return redirect()->back()->with('success', 'Barang berhasil di pesan');
    }

    public function detail($id)
    {
        $data = DB::table('pembelians')->where('id', $id)->get();

        return view('detailAdminPembelian', ['data' => $data[0]]);
    }

    public function acceptRequest($id)
    {
        $kurir = User::where('role', 'kurir')->get('id');
        $arrKurir = [];
        foreach ($kurir as $item) {
           array_push($arrKurir, $item->id);
        }
        $random_keys = array_rand($arrKurir,1);
        // dd($random_keys);
        DB::table('pembelians')->where('id', $id)->update([
            'status' => 'process',
            'kurir_id' => $arrKurir[$random_keys],
        ]);
        return redirect()->back();
    }

    public function cancelRequest($id)
    {
        DB::table('pembelians')->where('id', $id)->update([
            'status' => 'waiting',
            'kurir_id' => NULL,
        ]);
        return redirect()->back();
    }

    public function declineRequest($id)
    {
        DB::table('pembelians')->where('id', $id)->update([
            'status' => 'decline'
        ]);
        return redirect()->back();
    }
}

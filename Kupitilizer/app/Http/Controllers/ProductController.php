<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules;
use \Carbon\Carbon;
use Illuminate\View\View;


class ProductController extends Controller
{
    /**
     * Display manage product 
     * 
     * @return \Illuminate\View\View 
     */
    public function index(): View
    {
        $product = Product::all();
        return view('adminproduct',['products'=>$product]);
    }

    public function addProduct(Request $request): RedirectResponse
    {
        $date = Carbon::now();
        $request->validate([
            'nama_product'=> ['required', 'string'],
            'harga' => ['required', 'integer'],
            'deskripsi' => ['nullable', 'string'],
            //'foto_product' => ['image', 'nullable']
        ]);

        $product = Product::create([
            'id' => (string)$date->format('ymd').bin2hex(random_bytes(2)),
            'nama_product' => $request->nama_product,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            //'foto_product' => $request->foto_product,
        ]);
        return redirect()->back()->with('success', 'Product berhasil ditambahkan');
    } 

    public function destroy($id): RedirectResponse
    {
        //menghapus product dari database 
        DB::table('products')->where('id', $id)->delete();
        
        ///kembali ke laman manage user dengan alert succes
        return redirect()->back()->with('success', 'Product berhasil dihapus');
        
    }

    public function show($id): View
    {   
        $product=DB::table('products')->where('id', $id)->get();
        return view('editproduct',['products'=>$product]);
    }
    
    public function update(Request $request, $id): RedirectResponse{
        DB::table('products')->where('id', $id)
        ->update([
            'nama_product' => $request-> nama_product,
            'harga' => $request->  harga,
            'deskripsi' => $request-> deskripsi,


        //TO BE ADDED, PRODUCT PICTURE
            // simpan gambar ke dalam server
    // if ($request->hasFile('foto_product')) {
    //     $filename = $request->foto_product->getClientOriginalName();
    //     $path = $request->foto_product->storeAs('public/images', $filename);
    //     $product->foto_product = $filename;
    // }

    // $product->save();

        ]);
        return redirect ('admin/product')->with('success', 'Data Product berhasil diedit!');
    }

}

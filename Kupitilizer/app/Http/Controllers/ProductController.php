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
        $products = Product::all();
        return view('adminproduct',['products'=>$products]);
    }

    public function addProduct(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => ['required', 'string', 'max:255'],
            'nama_product'=> ['required', 'string'],
            'harga' => ['required', 'integer'],
            'deskripsi' => ['nullable', 'string'],
            //'foto_product' => ['image', 'nullable']
        ]);

        $product = Product::create([
            'id' => uniqid(),
            'nama_product' => $request->nama_product,
            'harga' => $request->harga,
            'deskripsi' => $request->deskripsi,
            //'foto_product' => $request->foto_product,
        ]);
        event(new Registered($product));
        return redirect()->back()->with('success', 'Product berhasil ditambahkan');
    }
}

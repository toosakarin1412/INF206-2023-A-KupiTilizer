<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePenjemputanRequest;
use App\Http\Requests\UpdatePenjemputanRequest;
use App\Models\Penjemputan;

class PenjemputanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminpenjemputan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePenjemputanRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Penjemputan $penjemputan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Penjemputan $penjemputan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePenjemputanRequest $request, Penjemputan $penjemputan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penjemputan $penjemputan)
    {
        //
    }
}

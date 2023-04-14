<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequestJemputRequest;
use App\Http\Requests\UpdateRequestJemputRequest;
use App\Models\RequestJemput;
use Illuminate\Http\Request;

class RequestJemputController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('adminpenjemputan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request){
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequestJemputRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RequestJemput $requestJemput)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RequestJemput $requestJemput)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestJemputRequest $request, RequestJemput $requestJemput)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RequestJemput $requestJemput)
    {
        //
    }
}

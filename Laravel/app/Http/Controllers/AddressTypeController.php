<?php

namespace App\Http\Controllers;

use App\AddressType;
use Illuminate\Http\Request;

class AddressTypeController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $addressTypes = AddressType::all();

        return view('addressType', compact('addressTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('addAddressType');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $data = $request->validated([
            'description' => 'required',
            'company_id' => 'required',
            'address_id' => 'required',
        ]);

        Product::create($data);

        return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AddressType  $addressType
     * @return \Illuminate\Http\Response
     */
    public function show(AddressType $addressType) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AddressType  $addressType
     * @return \Illuminate\Http\Response
     */
    public function edit(AddressType $addressType) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AddressType  $addressType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AddressType $addressType) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AddressType  $addressType
     * @return \Illuminate\Http\Response
     */
    public function destroy(AddressType $addressType) {
        //
        $addressType->delete();

        return redirect('addressType');
    }

}

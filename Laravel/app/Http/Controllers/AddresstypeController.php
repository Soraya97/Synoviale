<?php

namespace App\Http\Controllers;

use App\Addresstype;
use Illuminate\Http\Request;



class AddresstypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $addresstypes = Addresstype::all();

        return view('addresstype', compact('adresstypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addadresstype');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validated([
            'description' => 'required',
            'company_id' => 'required',
            'address_id' => 'required',
        ]);

        Addresstype::create($data);

        return redirect('addresstype');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Addresstype  $addresstype
     * @return \Illuminate\Http\Response
     */
    public function show(Addresstype $addresstype)
    {
        return view('onlyaddresstype');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Addresstype  $addresstype
     * @return \Illuminate\Http\Response
     */
    public function edit(Addresstype $addresstype)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Addresstype  $addresstype
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Addresstype $addresstype)
    {
        //
        $data = $request->only([
            'description',
            'company_id',
            'address_id',
        ]);

        $address->update($data);

        return redirect('address');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Addresstype  $addresstype
     * @return \Illuminate\Http\Response
     */
    public function destroy(Addresstype $addresstype)
    {
        $addresstype->delete();

        return redirect('adresstype');
    }
}

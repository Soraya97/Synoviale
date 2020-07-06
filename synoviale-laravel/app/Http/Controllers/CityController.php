<?php

namespace App\Http\Controllers;

use App\City;
use Illuminate\Http\Request;

use App\Http\Requests\CityRequest;

class CityController extends Controller {

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $cities = City::all();

        return view('city', comapct('cities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('addcity');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CityRequest $request) {
        //
        $data = $request->validated();

        City::create($data);

        return redirect('city');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city) {
        //
        return view('onlycity',compact('city'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(City $city) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, City $city) {
        //
        $data = $request->only([
            'postaleCode',
            'name',
            'canton',
            'country_id'
        ]);

        $brand->update($data);

        return redirect('brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city) {
        //
        $city->delete();

        return redirect('city');
    }

}

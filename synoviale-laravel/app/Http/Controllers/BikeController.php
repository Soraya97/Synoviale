<?php

namespace App\Http\Controllers;

use App\Bike;
use Illuminate\Http\Request;

use App\Http\Requests\BikeRequest;

class BikeController extends Controller
{
  /**
   * La classe n'est accessible que par les clients (rôle client)
   */
    public function __construct()
    {
        $this->middleware('checkclient');

    }
    /**
     * Display a listing of the resource.
     *
     * La vue bikeAvailable affiche les données des vélos
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all();

        return view('clients/bikeAvailable', compact('bikes'));
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('addbike');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        $data =$request->validated([
//            'type' => 'required',
//            'framSize' => 'null',
//            'frameUnit' => 'null',
//            'rimSize' => 'null',
//            'rimUnit' => 'null',
//            'product_id' => 'required',
//        ]);
//
//        Bike::create($data);
//
//        return redirect('bike');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Bike  $bike
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Bike $bike)
//    {
//        return view('onlybike',compact('bike'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Bike  $bike
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Bike $bike)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Bike  $bike
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Bike $bike)
//    {
//        $data = $request->only([
//            'framSize',
//            'framUnite',
//            'rimeSize',
//            'rimUnit',
//            'product_id'
//        ]);
//
//        $bike->update($data);
//
//        return redirect('bike');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Bike  $bike
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Bike $bike)
//    {
//        $bike->delete();
//
//        return redirect('bike');
//    }
}

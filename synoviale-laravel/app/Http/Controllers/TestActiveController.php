<?php

namespace App\Http\Controllers;

use App\Test;

use App\Http\Resources\Test as TestResource;
use Illuminate\Http\Request;

class TestActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // return TestResource::collection(Test::all());
       
        return TestResource::collection(Test::where('active',1)->get());
    }

//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Test  $test
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Test $test)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Test  $test
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Test $test)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Test  $test
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Test $test)
//    {
//        //
//    }
}

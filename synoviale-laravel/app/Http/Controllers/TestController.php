<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;

class TestController extends Controller {

    public function __construct()
    {
        $this->middleware('checkcontact');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $tests = Test::all();

        return view('companies/test', compact('tests'));
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create() {
//        //
//        return view('addtest');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(TestRequest $request) {
//        //
//        $data = $request->validated();
//
//        Test::create($data);
//
//        return redirect('test');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Test  $test
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Test $test) {
//        //
//        return view('onlytets', compact('tets'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Test  $test
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Test $test) {
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
//    public function update(Request $request, Test $test) {
//        //
//        $data = $request->only([
//            'startTime',
//            'endTime',
//            'feedback',
//            'testday_id',
//            'edition_id',
//            'event_id',
//            'product_id',
//            'client_id',
//        ]);
//
//        $test->update($data);
//
//        return redirect('test');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Test  $test
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Test $test) {
//        //
//        $test->delete();
//
//        return redirect('test');
//    }

}

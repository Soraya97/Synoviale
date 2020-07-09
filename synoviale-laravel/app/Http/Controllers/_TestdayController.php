<?php

namespace App\Http\Controllers;

use App\Testday;
use Illuminate\Http\Request;

class TestdayController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//        $testdays = Testday::all();
//
//        return view('testday',compact('testdays'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//        return view('addtestday');
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
//        //
//        $data =$request->validated([
//            'date' => 'required',
//            'startHour' => 'required',
//            'endHour' => 'required',
//            'event_id' => 'required',
//            'edition_id' => 'required',
//        ]);
//
//        Testday::create($data);
//
//        return redirect('testday');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Testday  $testday
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Testday $testday)
//    {
//        //
//        return view('onlytestday',compact('testday'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Testday  $testday
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Testday $testday)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Testday  $testday
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Testday $testday)
//    {
//        //
//        $data = $request->only([
//            'date',
//            'startHour',
//            'endHour',
//            'event_id',
//            'edition_id'
//        ]);
//
//        $testday->update($data);
//
//        return redirect('testday');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Testday  $testday
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Testday $testday)
//    {
//        //
//        $testday->delete();
//
//        return redirect('testday');
//    }
}

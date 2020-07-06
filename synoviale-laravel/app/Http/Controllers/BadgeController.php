<?php

namespace App\Http\Controllers;

use App\Badge;
use Illuminate\Http\Request;

use App\Http\Requests\BadgeRequest;

class BadgeController extends Controller
{
    public function __construct()
    {
        // $this->middleware('checkuser');
        //
        // $this->middleware('checkemployee');
        //
        // $this->middleware('checkclient');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $badges = Badge::all();

        return view('clients/pass',compact('badges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reservationPass');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BadgeRequest $request)
    {
        $data = $request->validated();

        Badge::create($data);

        return view('badge');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function show(Badge $badge)
    {
        return view('onlybadge',compact('badge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function edit(Badge $badge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Badge $badge)
    {
        $data = $request->only([
            'number',
            'client_id',
            'test_day_id',
            'edition_id',
            'event_id'
        ]);

        $badge->update($data);

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Badge $badge)
    {
        $badge->delete();

        return redirect('badge');
    }
}

<?php

namespace App\Http\Controllers;

use App\Edition;

use Illuminate\Http\Request;

use App\Http\Requests\EditionRequest;

class EditionController extends Controller
{
    public function __construct()
    {
        // $this->middleware('checkorganizer'); 

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $edition = Edition::orderBy('number','desc')->get()->first();

        return view('homepage',compact('edition'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addedition');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EditionRequest $request)
    {
        //
        $data = $request->validated();

        Edition::create($data);

        return redirect('edition');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function show(Edition $edition)
    {
        //
        return view('onlyedition',compact('edition'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function edit(Edition $edition)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edition $edition)
    {
        //
        $data = $request->only([
            'number',
            'place',
            'startDate',
            'endDate',
            'event_id'
        ]);

        $edition->update($data);

        return redirect('edition');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edition  $edition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edition $edition)
    {
        //
         $edition->delete();

        return redirect('edition');
    }
}

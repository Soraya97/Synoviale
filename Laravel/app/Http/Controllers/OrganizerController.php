<?php

namespace App\Http\Controllers;

use App\Organizer;
use Illuminate\Http\Request;

class OrganizerController extends Controller {

    public function __construct()
    {
        // $this->middleware('checkuser');
        //
        // $this->middleware('checkorganizer'); 

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $organizers = Organizer::all();

        return view('organizer', compact('organizers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('addorganizer');
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
            'person_id' => 'required',
        ]);

        Organizer::create($data);

        return redirect('organizer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function show(Organizer $organizer) {
        //
        return view('onlyorganizer', compact('organizer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizer $organizer) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizer $organizer) {
        //
        $data = $request->only([
            'person_id',
        ]);

        $organizer->update($data);

        return redirect('organizer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organizer  $organizer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizer $organizer) {
        //
        $organizer->delete();

        return redirect('organizer');
    }

}

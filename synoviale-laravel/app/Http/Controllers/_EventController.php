<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//        $events = Event::all();
//
//        return view('event',comapct('events'));
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
//        return view('addevent');
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
//            'name' => 'required',
//        ]);
//
//        Event::create($data);
//
//        return redirect('event');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Event  $event
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Event $event)
//    {
//        //
//        return view('onlyevent',compact('event'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Event  $event
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Event $event)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Event  $event
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Event $event)
//    {
//        //
//        $data = $request->only([
//            'name',
//        ]);
//
//        $event->update($data);
//
//        return redirect('event');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Event  $event
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Event $event)
//    {
//        //
//         $event->delete();
//
//        return redirect('event');
//    }
}

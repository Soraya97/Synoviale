<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        //
//        $jobs = Job::all();
//
//        return view('job',comapct('jobs'));
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
//        return view('addjob');
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
//            'description' => 'required',
//            'event_id' => 'required',
//            'edition_id' => 'required',
//            'employee_id' => 'required',
//        ]);
//
//        Job::create($data);
//
//        return redirect('Job');
//    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  \App\Job  $job
//     * @return \Illuminate\Http\Response
//     */
//    public function show(Job $job)
//    {
//        //
//         return view('onlyjob',compact('job'));
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Job  $job
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Job $job)
//    {
//        //
//
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Job  $job
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Job $job)
//    {
//        //
//        $data = $request->only([
//            'description',
//            'event_id',
//            'edition_id',
//            'employee_id'
//        ]);
//
//        $job->update($data);
//
//        return redirect('job');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Job  $job
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Job $job)
//    {
//        //
//        $job->delete();
//
//        return redirect('job');
//    }
}

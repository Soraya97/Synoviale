<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

use App\Http\Requests\PersonRequest;

class PersonController extends Controller
{
    public function __construct()
    {
        // $this->middleware('checkuser');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $people = Person::all();

        return view('paramClient',compact('people'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('addperson');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PersonRequest $request)
    {
        //
        $data = $request->validated();

        Person::create($data);

        return redirect('person');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
        return view('onlyperson',compact('person'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
        //
        $data = $request->only([
            'name',
            'firstname',
            'phoneNumber1',
            'phoneNumber2',
            'email1',
            'email2',
            'comment',
            'address_id',
        ]);

        $person->update($data);

        return redirect('person');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(Person $person)
    {
        //
         $person->delete();

        return redirect('person');

    }
}

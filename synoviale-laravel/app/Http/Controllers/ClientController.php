<?php

namespace App\Http\Controllers;

use App\Client;
use App\Person;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\CompteRequest;

class ClientController extends Controller {

    public function __construct()
    {
        // $this->middleware('checkuser');
        //
        // $this->middleware('checkclient');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
        $clients = Client::all();
        return view('reception/clientsList', compact('clients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
        return view('reception/addClient');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        // $data = $request->validated([
        //     'homeCanton' => 'null',
        //     'person_id' => 'required',
        //     'badge_id' => 'required',
        //     'test_id' => 'required',
        // ]);
        //
        // Client::create($data);
        //
        // return redirect('client');

        // $data = $request->validate();

        $person = $request->only('name','firstname','email','email2','phoneNumber1','phoneNumber2','comment');

        Person::create($person);

        $personId = Person::where($personTest)->first();

        $request->request->add(['person_id' => $personId->id]);

        $user = $request->only('username','email','password','person_id');

        $client = $request->only('person_id');

        User::create($user);

        Client::create($client);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client) {
        //
        return view('/reception/viewClient', compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client) {
        //
        $data = $request->only([
            'homeCanton',
            'person_id',
        ]);

        $client->update($data);

        return redirect('client');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client) {
        //
        $client->delete();

        return redirect('client');
    }

}

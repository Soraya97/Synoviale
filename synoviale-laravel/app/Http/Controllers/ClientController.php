<?php

namespace App\Http\Controllers;

use App\Client;
use App\Person;
use App\User;
use App\Testday;
use App\Badge;
use App\Country;
use App\City;
use App\Address;

use Illuminate\Http\Request;

use App\Http\Requests\ClientRequest;

class ClientController extends Controller {

  /**
   * La classe n'est accessible que par le staff (rôle staff)
   */
    public function __construct()
    {
        $this->middleware('checkemployee');
    }
    /**
     * Display a listing of the resource.
     *
     * La vue des clients affichent les données de tous les clients disponibles dans la base de données
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
     * Redirige sur le formulaire d'ajout d'un client, qui permet de créer directement un client avec un(des) badge(s)
     * L'ID des testdays est renvoyés lors de la création du badge
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        $days = Testday::all();

        return view('reception/addClient', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * Un client et une personne sont créés
     * Un badge est enregistré dans la base de données
     * Il faut envoyer l'ID de l'event, de l'edition et du client qui vient d'être créé,
     * ainsi que les IDs des jours qu'il a réservé
     * La vue des clients est ensuite affichée avec le nouveau client
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request) {

        $personTest = $request->only('name','firstname');

        $person = $request->only('name','firstname','email','email2','phoneNumber1','phoneNumber2','comment');

        if(Person::where($personTest)->first())
        {
            return redirect('client/create');
        }

        Person::create($person);

        $personId = Person::where($personTest)->first();

        $request->request->add(['person_id' => $personId->id]);

        $client = $request->only('person_id');

        Client::create($client);


        // adresse

        if($request->country)
        {
        // gestion du pays

            if(!Country::where('name',$request->country)->first())
            {
                Country::create(['name' => $request->country]);
            }

            //On ajoute country_id à la requête

            $countryId = Country::where('name',$request->country)->first();

            $request->request->add(['country_id' => $countryId->id]);

            // Gestion de la ville

            if(!City::where('name',$request->city)->first())
            {
                City::create(['name' => $request->city,'postalCode' => $request->postalCode,'country_id' => $request->country_id,'canton' => $request->canton]);
            }

            $cityId = City::where('name',$request->city)->first();

            $request->request->add(['city_id' => $cityId->id]);

            $address = $request->only('street1','street2','streetNumber','POBox','city_id','person_id');

            Address::create($address);

        }

        // création des pass

        $client = Client::where($client)->first();

        $request->request->add(['event_id' => 1]);
        $request->request->add(['edition_id' => 1]);
        $request->request->add(['client_id' => $client->id]);


        if(isset($request->date)) {
            foreach ($request->date as $testday)
            {
                $request->request->add(['testday_id'=> $testday]);

                do {

                    $number = uniqid(rand());

                }while ($number == Badge::where('number',$number)->get());

                $request->request->add(['number' => $number]);

                $badge = $request->only('event_id','edition_id','client_id','testday_id','number');

                Badge::create($badge);

            }
        };

        return redirect('client');

    }

    /**
     * Display the specified resource.
     *
     * Il est possible de voir les informations spécifiques de chaque client
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id) {

        $client = Client::findOrFail($id);

        return view('/reception/viewClient', compact('client'));
    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Client  $client
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Client $client) {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Client  $client
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Client $client) {
//        //
//        $data = $request->only([
//            'homeCanton',
//            'person_id',
//        ]);
//
//        $client->update($data);
//
//        return redirect('client');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Client  $client
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Client $client) {
//        //
//        $client->delete();
//
//        return redirect('client');
//    }
//
}

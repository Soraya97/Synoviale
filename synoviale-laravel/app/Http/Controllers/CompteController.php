<?php

namespace App\Http\Controllers;

use App\User;
use App\Organizer;
use App\Client;
use App\Contact;
use App\Employee;
use App\Person;

//for adresss
use App\Country;
use App\City;
use App\Address;

use Illuminate\Http\Request;
use App\Http\Requests\CompteRequest;

use Illuminate\Support\Facades\Session;

class CompteController extends Controller
{
    public function connect(Request $request)
    {

        $data =  $request->validate([
            "username"           =>    "required",
            "password"        =>    "required"
        ]);

        $user = User::where($data)->first();

        if($user)
        {
            $request->session()->put('user',$user);

            $organizer = Organizer::where('person_id',$user->person->id)->first();

            $client = Client::where('person_id',$user->person->id)->first();

            $employee = Employee::where('person_id',$user->person->id)->first();

            $contact = Contact::where('person_id',$user->person->id)->first();

            $request->session()->put('organizer',$organizer);

            $request->session()->put('client',$client);

            $request->session()->put('employee',$employee);

            $request->session()->put('contact',$contact);


          return redirect()->back();
      }
      else
      {
          return redirect()->back();
      }

    }

    public function deconnect()
    {
        Session::flush();

        return redirect('/');
    }

    public function create() {

        return view('clients/createAccount');
    }

    public function store(Request $request)
    {

       // $data = $request->validate();   

        $person = $request->only('name','firstname','email','email2','phoneNumber1','phoneNumber2','comment');

        Person::create($person);

        $personTest =  $request->only('name','firstname');

        $personId = Person::where($personTest)->first();

        if(!$personId)
        {
            return redirect('inscription');
        }

        $request->request->add(['person_id' => $personId->id]);

        $user = $request->only('username','email','password','person_id');

        $client = $request->only('person_id');

        User::create($user); //'password' => Hash::make($data['password']),

        Client::create($client);

        // adresse

        // gestion du paye

        if(!Country::where('name',$request->country)->first())
        {
            Country::create(['name' => $request->country]);
        }

        //On ajoute country_id à la requet

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

        // code de connexion

        $userTest = $request->only('username','password');

        $userC = User::where($userTest)->first();

        $request->session()->put('user',$userC);

        $clientC = Client::where('person_id',$userC->person->id)->first();

        $request->session()->put('client',$clientC);

    return redirect('/');

    }

    public function login() {

        return view('login');
    }


}

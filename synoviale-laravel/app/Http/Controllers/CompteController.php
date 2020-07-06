<?php

namespace App\Http\Controllers;

use App\User;
use App\Organizer;
use App\Client;
use App\Contact;
use App\Employee;
use App\Person;

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

        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'name' => 'required',
            'firstname' => 'required',
        ]);

        $personTest = $request->only('name','firstname');

        $userTest = $request->only('username','email');


        if(Person::where($personTest)->first())
        {
            return redirect('/');
        }

        if(User::where($userTest)->first())
        {
            return redirect('/');
        }

        $person = $request->only('name','firstname','email'); //,'email2','phoneNumber1','phoneNumber2','comment');

        Person::create($person);

        $personId = Person::where($personTest)->first();

        $request->request->add(['person_id' => $personId->id]);

        $user = $request->only('username','email','password','person_id');

        $client = $request->only('person_id');

        User::create($user);

        Client::create($client);

        // ajouter code de connexion

        return redirect('/');

    }

}

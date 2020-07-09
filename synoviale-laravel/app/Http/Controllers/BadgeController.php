<?php

namespace App\Http\Controllers;

use App\Badge;
use Illuminate\Http\Request;

use App\Testday;
use Session;

use App\Http\Requests\BadgeRequest;

class BadgeController extends Controller
{

    /**
     * La classe n'est accessible que par les clients (rôle client)
     * checkbadge ne donne accès qu'aux badges de la personne connectée
     */
    public function __construct()
    {
        $this->middleware('checkclient');
        $this->middleware('checkbadge')->only('index','show');
    }
    /**
     * Display a listing of the resource.
     *
     * L'URL /pass redirige sur la vue 404 sauf si l'utilisateur est un client connecté
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return redirect('404');
    }

    /**
     * Show the form for creating a new resource.
     *
     * Redirige sur le formulaire pour que l'utilisateur puisse réserver un pass
     * L'ID des testdays est renvoyés lors de la création du badge
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Testday::all();

        return view('/clients/reservationPass', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * Un badge est enregistré dans la base de données
     * Il faut envoyer l'ID de l'event, de l'edition et du client actuellement connecté,
     * ainsi que les IDs des jours qu'il a réservé
     * La vue 404 est renvoyée en cas d'erreur
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->request->add(['event_id' => 1]);
        $request->request->add(['edition_id' => 1]);
        $request->request->add(['client_id' => $request->session()->get('client.id')]);

        if(isset($request->date)) {
            foreach ($request->date as $testday)
            {
            // on créer une date seulement si un badge du testday avec ce client n'existe pas encore

            if(!Badge::where(['client_id' => $request->session()->get('client.id'),'testday_id' => $testday])->first())
            {

                    $request->request->add(['testday_id'=> $testday]);

                    do {

                        $number = uniqid(rand());

                    }while ($number == Badge::where('number',$number)->get());

                    $request->request->add(['number' => $number]);

                    $badge = $request->only('event_id','edition_id','client_id','testday_id','number');

                    Badge::create($badge);
                }
            }

            return redirect()->route('pass.show', $request->session()->get('client.id'));
        };

        return redirect('404');
    }

    /**
     * Display the specified resource.
     *
     * Seuls les badges du client connecté sont affichés
     * 
     * @param  \App\Badge  $badge
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $badges = Badge::where('client_id', $id)->get();

        return view('clients/pass',compact('badges'));
    }

//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  \App\Badge  $badge
//     * @return \Illuminate\Http\Response
//     */
//    public function edit(Badge $badge)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  \App\Badge  $badge
//     * @return \Illuminate\Http\Response
//     */
//    public function update(Request $request, Badge $badge)
//    {
//        $data = $request->only([
//            'number',
//            'client_id',
//            'test_day_id',
//            'edition_id',
//            'event_id'
//        ]);
//
//        $badge->update($data);
//
//        return redirect('product');
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  \App\Badge  $badge
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy(Badge $badge)
//    {
//        $badge->delete();
//
//        return redirect('badge');
//    }
}

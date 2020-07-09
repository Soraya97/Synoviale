<?php

namespace App\Http\Controllers;

use App\User;

use App\Person;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   * La classe n'est accessible que par les contacts des utilisateur connecté (rôle user)
   * sauf show(), qui est accessible à tous
   */
    public function __construct()
    {
        $this->middleware('checkuser')->only('show');
    }
    /**
     * Display a listing of the resource.
     *
     * L'URL /user redirige sur la vue 404 sauf si l'utilisateur est connecté
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('404');
    }

//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        return view('adduser');
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
//        $data = $request->validate([
//            'username' => 'required',
//            'email' => 'required',
//            'password' => 'required',
//        ]);
//
//        User::create($data);
//
//        return redirect('user');
//    }

    /**
     * Display the specified resource.
     *
     * Permet de voir les paramètres du client connecté
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('clients/paramClient', compact('user'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * Permet d'arriver sur la vue du formulaire de mofication des paramètres
     * du client connecté
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('clients/paramClientUpdate',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * Pas encore codé:
     * Doit permettre d'enregistrer les modifications faites par le
     * client connecté sur ses paramètres
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        User::getById($id)->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * La suppression ne supprime que l'utilisateur de la table users
     * mais les informations des tables clients et persons sont conservées
     * pour archive
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        Session::flush();

        return redirect('/');
    }
}

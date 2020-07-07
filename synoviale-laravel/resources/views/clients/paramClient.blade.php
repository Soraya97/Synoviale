@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="paramClient container">

    <h2>MES PARAMÈTRES</h2>
    <h3>MES COORDONNÉES</h3>
    <table>
        <tr><td>Nom</td><td>{{$user->person->name}}</td></tr>
        <tr><td>Prénom</td><td>{{$user->person->firstname}}</td></tr>
        <tr><td>Email</td><td>@if(($user->email) == null)-@else{{$user->email}}@endif</td></tr>
        <tr><td>Tél.</td><td>@if(($user->person->phoneNumber1) == null)-@else{{$user->person->phoneNumber1}}@endif</td></tr>
        @if(($user->person->address_id) != null)
        <tr><td>Rue</td><td>{{$user->person->address->street1}}</td></tr>
        <tr><td>N° de rue</td><td>{{$user->person->address->streetNumber}}</td></tr>
        <tr><td>Localité</td><td>{{$user->person->address->city->name}}</td></tr>
        <tr><td>NPA</td><td>{{$user->person->address->city->postalCode}}</td></tr>
        <tr><td>Canton</td><td>{{$user->person->address->city->canton}}</td></tr>
        <tr><td>Pays</td><td>{{$user->person->address->city->country->name}}</td></tr>
        @endif
        <tr><td>Commentaire</td><td>{{$user->person->comment}}</td></tr>
    </table>
    <p><a href="" class="btn center-align">Modifier</a></p>
    <p><a href="#sure" class="btn center-align modal-trigger">Supprimer mon compte</a></p>
</div>

<div id="sure" class="modal">
    <div class="modal-content">
        <h5>Suppression des données</h5>
        <h6>Êtes-vous sûr.e?</h6>
        <p class="red-text"><i>Vos données sont sauvegardées pour les entreprises.</i></p>
    </div>
    <div class="modal-footer">
        <form method="POST" action="">
            @csrf
            @method('DELETE')
            <input type="submit" value="Oui" class="modal-close btn-flat">Oui</input>
            <a href="" class="modal-close btn-flat">Non</a>
        </form>

    </div>
</div>
@endsection

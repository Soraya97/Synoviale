@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
@foreach($clients as $client)
<div class="paramClient container">

    <h2>MES PARAMÈTRES</h2>
    <h3>MES COORDONNÉES</h3>
<table>
    <tr><td>Nom</td><td>{{$client->person->name}}</td></tr>
    <tr><td>Prénom</td><td>{{$client->person->firstName}}</td></tr>
    <tr><td>Email</td><td>{{$client->person->email1}}</td></tr>
    <tr><td>Tél.</td><td>{{$client->person->phoneNumber1}}</td></tr>
    <tr><td>Rue</td><td>{{$client->person->address->street1}}</td></tr>
    <tr><td>N° de rue</td><td>{{$client->person->address->streetNumber}}</td></tr>
    <tr><td>Localité</td><td>{{$client->person->address->city->name}}</td></tr>
    <tr><td>NPA</td><td>{{$client->person->address->city->postalCode}}</td></tr>
    <tr><td>Canton</td><td>{{$client->person->address->city->canton}}</td></tr>
    <tr><td>Pays</td><td>{{$client->person->address->city->country->name}}</td></tr>
</table>

<br>
<a href="" class="btn center-align">Modifier</a><br><br>
<a href="#sure" class="btn center-align modal-trigger">Supprimer mon compte</a>

</div>



<div id="sure" class="modal">
    <div class="modal-content">
      <h5>Suppression des données</h5>
      <h6>Êtes-vous sûr.e?</h6>
      <p class="red-text"><i>Vos données sont sauvegardées pour les entreprises.</i></p>
    </div>
    <div class="modal-footer">
      <form method="POST" action="{{route('parametre.destroy', [$client->id])}}">
              @csrf
              @method('DELETE')
              <input type="submit" value="Oui" class="modal-close btn-flat"></input>
              <a href="" class="modal-close btn-flat">Non</a>
      </form>

    </div>
  </div>
@endforeach
@endsection

@extends('template')

@section('nav')
@include('reception.nav')
@endsection

@section('contenu')
<div class="account container">

<a href="{{url("client")}}"><i class="material-icons">arrow_back</i>RETOUR À LA LISTE DES CLIENTS</a>

<div class="">
  <h2>COORDONNÉES DE {{$client->person->name}} {{$client->person->firstname}}</h2>
  <table>
      <tr><td>Nom</td><td>{{$client->person->name}}</td></tr>
      <tr><td>Prénom</td><td>{{$client->person->firstname}}</td></tr>
      <tr><td>Email</td><td>{{$client->person->email}}</td></tr>
      <tr><td>Tél.</td><td>{{$client->person->phoneNumber1}}</td></tr>
      <tr><td>Rue</td><td>{{$client->person->address->street1}}</td></tr>
      <tr><td>N° de rue</td><td>{{$client->person->address->streetNumber}}</td></tr>
      <tr><td>Localité</td><td>{{$client->person->address->city->name}}</td></tr>
      <tr><td>NPA</td><td>{{$client->person->address->city->postalCode}}</td></tr>
      <tr><td>Canton</td><td>{{$client->person->address->city->canton}}</td></tr>
      <tr><td>Pays</td><td>{{$client->person->address->city->country->name}}</td></tr>
  </table>
</div>
    </div>
@endsection

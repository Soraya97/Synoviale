@extends('template')

@section('nav')
@include('reception.nav')
@endsection

@section('contenu')
<div class="account container">

    <div class="row">
        <form class="col l3 s12 right">
            <div class="input-field">
                <label class="label-icon" for="search"><i class="material-icons">search</i>Rechercher</label>
                <input id="search" type="search">
            </div>
        </form>
        <form class="col l9 s12 right">
            <div class="input-field">
                <button type="submit" class="btn right col l3 s12">TROUVER PAR QR CODE</a>
            </div>
        </form>

    </div>

    <div class="">
        <h2>LISTE DES CLIENTS</h2>
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>NOM</th>
                    <th>PRÉNOM</th>
                    <th>N<sup>o</sup> LOGIN</th>
                    <th>N<sup>o</sup> QR CODE</th>
                    <th>JOURS INSCRITS</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($clients as $client)
                <tr>
                    <td>{{$client->person->name}}</td>
                    <td>{{$client->person->firstname}}</td>
                    <td>Login</td>
                    <td>QR Code</td>
                    <td>Jours</td>
                    <td><a href="{{route('client.show', [$client->id])}}" class="btn blue-light"><i class="material-icons">remove_red_eye</i> VOIR</a></td>
                </tr>
                @endforeach
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Login</td>
                    <td>QR Code</td>
                    <td>Jours</td>
                    <td><a href="#" class="btn blue-light"><i class="material-icons">remove_red_eye</i> VOIR</a></td>
                </tr>
                <tr>
                    <td>Nom</td>
                    <td>Prénom</td>
                    <td>Login</td>
                    <td>QR Code</td>
                    <td>Jours</td>
                    <td><a href="" class="btn blue-light"><i class="material-icons">remove_red_eye</i> VOIR</a></td>
                </tr>
            </tbody>
        </table>
    </div>
{{!! links !!}}
    <div class="center">
        <ul class="pagination">
            <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
            <li class="active"><a href="#!">1</a></li>
            <li class="waves-effect"><a href="#!">2</a></li>
            <li class="waves-effect"><a href="#!">3</a></li>
            <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
        </ul>
    </div>
</div>
@endsection

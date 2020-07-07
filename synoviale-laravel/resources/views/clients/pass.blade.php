@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="pass container">


    <h2>MON PASS</h2>

    <div class="carousel carousel-slider">
      @foreach($badges as $badge)
        <div class="carousel-item">
            <p>Valable le {{\Carbon\Carbon::parse($badge->testday->date)->locale('fr_FR')->isoFormat('LL')}} de {{$badge->testday->startHour}} à {{$badge->testday->endHour}}</p>
            <img src="/img/qrcode.png" class="center" alt="Code QR">
        </div>
      @endforeach
    </div>

    <div class="center-align">
        <i class="material-icons">navigate_before</i><i class="material-icons">navigate_next</i>
    </div>


    @if($badges == '[]')
    <div class="center">
        <p>Vous n'avez pas encore de pass.</p>
        <a href="{{route('pass.create')}}">RÉSERVER VOTRE PASS</a>
    </div>
    @endif

</div>

@endsection

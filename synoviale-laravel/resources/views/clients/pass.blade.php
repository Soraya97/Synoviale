@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="pass container">
  @foreach($badges as $badge)
    <h2>MON PASS</h2>

    <div class="carousel carousel-slider">
      <div class="carousel-item">
        <p>Valable le {{\Carbon\Carbon::parse($badge->testday->date)->locale('fr_FR')->isoFormat('LL')}} de {{$badge->testday->startHour}} à {{$badge->testday->endHour}}</p>
        <img src="img/qrcode.png" class="center-align" alt="Code QR">
      </div>
    </div>

    <div class="center-align">
      <i class="material-icons">navigate_before</i><i class="material-icons">navigate_next</i>
    </div>


<div class="center">
  <p>Vous n'avez pas encore de pass.</p>
  <a href="{{route('pass.create')}}">RÉSERVER VOTRE PASS</a>
</div>
@endforeach
</div>
@endsection

@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="pass container">

    <h2>MON PASS</h2>
<div class="row">
    <div class="col s12">
        <ul id="tabs-badges" class="tabs">
          @foreach($badges as $badge)
            <li class="tab col s3"><a href="#{{$badge->number}}">{{\Carbon\Carbon::parse($badge->testday->date)->locale('fr_FR')->isoFormat('LL')}} de {{$badge->testday->startHour}} à {{$badge->testday->endHour}}</a></li>
            @endforeach
          </ul>
    </div>
    @foreach($badges as $badge)
    <div id="{{$badge->number}}" class="col s12"> <h3 class="bold" style="font-size:1.6rem;">Numéro du pass: {{$badge->number}}</h3> <img src="/img/qrcode.png" class="center qrCodeDesktop" alt="Code QR" width="100%"> </div>
    @endforeach

</div>


    @if($badges == '[]')
    <div class="center">
        <p>Vous n'avez pas encore de pass.</p>
        <a href="{{route('pass.create')}}">RÉSERVER VOTRE PASS</a>
    </div>
    @endif

</div>

@endsection

@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
{{--<!-- todo: disabled boxes of days already reserved -->--}}
<div class="container">
    <h2>RÉSERVER MON JOUR</h2>
    <div class="row">
        <div class="col s12">
            <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s3 disabled"><a href="#jours" class="active">1 JOURS</a></li>
                <li class="tab col s3 disabled"><a href="#paiement">2 PAIEMENT</a></li>
            </ul>
        </div>

        <div id="jours" class="col s12">
            <form method="post" action="{{route('pass.store')}}">
                @csrf

                <h3>VENDREDI 02.10.2020</h3>
                @foreach($days as $day)
                @if($day->date == '02.10.2020')
                <p>
                    <label for="{{$day->id}}">
                        <input type="checkbox" class="filled-in" name="date[]" value="{{$day->id}}" id="{{$day->id}}"/>
                        <span>{{$day->startHour}} - {{$day->endHour}}</span>
                    </label>
                </p>
                @endif
                @endforeach

                <h3>SAMEDI 03.10.2020</h3>
                @foreach($days as $day)
                @if($day->date == '03.10.2020')
                <p>
                    <label for="{{$day->id}}">
                        <input type="checkbox" class="filled-in" name="date[]" value="{{$day->id}}" id="{{$day->id}}"/>
                        <span>{{$day->startHour}} - {{$day->endHour}}</span>
                    </label>
                </p>
                @endif
                @endforeach

                <h3>DIMANCHE 04.10.2020</h3>
                @foreach($days as $day)
                @if($day->date == '04.10.2020')
                <p>
                    <label for="{{$day->id}}">
                        <input type="checkbox" class="filled-in" name="date[]" value="{{$day->id}}" id="{{$day->id}}"/>
                        <span>{{$day->startHour}} - {{$day->endHour}}</span>
                    </label>
                </p>
                @endif
                @endforeach
                <div class="row">
                    <button type="submit" class="btn col s12 l2">SUIVANT</button>
                </div>
            </form>
        </div>
        <div id="paiement" class="col s12"></div>
    </div>
</div>
@endsection

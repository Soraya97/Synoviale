@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
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

                @foreach($days as $day)
                <h3></h3>
                <p>
                    <label for="{{$day->id}}">
                        <input type="checkbox" class="filled-in" name="date[]" value="{{$day->id}}" id="{{$day->id}}"/>
                        <span>{{$day->date}} {{$day->startHour}} - {{$day->endHour}}</span>
                    </label>
                </p>
                  @endforeach
                <!-- <p>
                    <label for="veAp">
                        <input type="checkbox" class="filled-in" name="date[]" value="" id="veAp"/>
                        <span>13h30 - 17h00</span>
                    </label>
                </p>
                <h3>SAMEDI 03.10.2020</h3>
                <p>
                    <label for="saMa">
                        <input type="checkbox" class="filled-in" name="date[]" value="" id="saMa"/>
                        <span>9h00 -  12h30</span>
                    </label>
                </p>
                <p>
                    <label for="saAp">
                        <input type="checkbox" class="filled-in" name="date[]" value="" id="saAp"/>
                        <span>12h30 - 16h00</span>
                    </label>
                </p>
                <h3>DIMANCHE 04.10.2020</h3>
                <p>
                    <label for="diMa">
                        <input type="checkbox" class="filled-in" name="date[]" value="" id="diMa"/>
                        <span>9h00 - 12h30</span>
                    </label>
                </p>
                <p>
                    <label for="diAp">
                        <input type="checkbox" class="filled-in" name="date[]" value="" id="diAp"/>
                        <span>12h30 - 16h00</span>
                    </label>
                </p> -->
                <div>
                    <button type="submit" class="btn" value="passSub">SUIVANT</button>
                </div>
            </form>
        </div>
        <div id="paiement" class="col s12"></div>
    </div>
</div>
@endsection

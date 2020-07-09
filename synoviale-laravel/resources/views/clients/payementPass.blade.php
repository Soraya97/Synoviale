@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
{{--<!-- todo: add this view in the process of reservation and the possibility to pay online -->--}}
<div class="container">
    <h2>RÉSERVER MON JOUR</h2>

    <div class="row">
        <div class="col s12">
            <ul id="tabs-swipe-demo" class="tabs">
                <li class="tab col s3 disabled"><a href="#jours">1 JOURS</a></li>
                <li class="tab col s3 disabled"><a href="#paiement" class="active">2 PAIEMENT</a></li>
            </ul>
        </div>
        <div id="jours" class="col s12"></div>

        <div id="paiement" class="col s12">
            <form method="post" action="">
                <p>Vous pouvez soit paiement maintenant en ligne soit directement à l'accueil le jour de la manifesation.</p>
                <p>
                    <label for="online">
                        <input type="checkbox" class="filled-in" name="" value="" id="online"/>
                        <span>En ligne</span>
                    </label>
                </p>
                <p>
                    <label for="irl">
                        <input type="checkbox" class="filled-in" name="" value="" id="irl"/>
                        <span>Sur place</span>
                    </label>
                </p>
                <div class="row">
                    <a href="{{url('/pass')}}" class="btn col s12 l2 left">SUIVANT</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

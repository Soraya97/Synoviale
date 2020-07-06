@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
  <div class="slider welcome">
    <ul class="slides">
      <li>
        <img src="/img/bike.jpg" alt="Un cycliste de dos">
        <div class="caption center-align">
          <h1 class="white-text">{{$edition->number}}<sup>e</sup> édition</h1>
          <h2 class="white-text">2-4 OCTOBRE 2020</h2>
          <p class="align-bottom"><a href="#!" class="bold">EN SAVOIR PLUS</a></p>
          @user
          <p><a class="btn waves-effect" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a></p>
          @else
          <p><a class="btn waves-effect" href="{{ route('compte.connect') }}">RÉSERVER SON PASS</a></p>
          @enduser
        </div>
      </li>
      <li>
        <img src="/img/fonctionnalites.jpg" alt="Un cycliste regardant le soleil couchant">
        <div class="caption center-align">
        <h2 class="white-text">Nouvelle fonctionnalité !</h2 >
        <p class="white-text bold">Vous pouvez maintenant voir la disponibilité des vélos.</p>
        <p class="align-bottom"><a href="" class="bold">DÉCOUVRIR</a><br></p>
        @user
        <p><a class="btn waves-effect" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a></p>
        @else
        <p><a class="btn waves-effect" href="{{ route('compte.connect') }}">RÉSERVER SON PASS</a></p>
        @enduser
        </div>
      </li>
    </ul>
  </div>

<div class="container section">
    <h2>DÉCOUVREZ NOS PARCOURS</h2>
    <img src="img/news.jpg" class="img img-responsive" alt="Pré dans la montagne lors de la Golden Hour">
    <p>Les parcours vert, rouge, noir, bleu et jaune seront à votre disposition pendant tout l'événement !</p>
    <a href="" class="waves-effect waves-light btn-large center-align">EN SAVOIR PLUS</a>
</div>

<div class="divider"></div>
<div class="container section slogan">
    <h2>PLUS DE <span class="orange-text">35 MARQUES</span> ET <span class="orange-text">500 VÉLOS-TEST</span> !</h2>
</div>

<div class="divider"></div>
<div class="container section partners">
    <h2 id="partners">PARTENAIRES</h2>

</div>
@endsection

@section('footer')
<div class="container">
<div class="section">
    <h2>INFOS PRATIQUES</h2>
    <p><a href="">GÉNÉRALITÉS</a></p>
    <p><a href="">PARCOURS</a></p>
    <p><a href="">TARIFS/HORAIRES</a></p>
    <p><a href="">ACCÈS/PLAN</a></p>
    <p><a href="">LOGEMENTS</a></p>
    <p><a href="">CONTACT</a></p>
    </div>
<a href="https://www.facebook.com/BikeGryon"><img class="socialMedia" src="img/FB.png" height="10rem" height="10rem" alt="Logo de Facebook"></a>
<p class="center">© 2020 BIKE TEST GRYON<a href="#wrapper" class="right"><i class="material-icons">expand_less</i></a></p>

</div>
@endsection

@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
  <div class="slider welcome">
    <ul class="slides">
      <li>
        <img src="/img/bike.jpg">
        <div class="caption center-align">
          @foreach($editions as $edition)
          <h1 class="white-text">{{$edition->number}}<sup>e</sup> édition</h1>
          @endforeach
          <h2 class="white-text">2-4 OCTOBRE 2020</h2>
          <a href="#!" class="bold">EN SAVOIR PLUS</a><br>
          @if(Auth::check())
          <a class="btn waves-effect" href="{{url('/reservationPass')}}">RÉSERVER SON PASS</a>
          @else
          <a class="btn waves-effect" href="{{ route('user.connect') }}">RÉSERVER SON PASS</a>
          @endif
        </div>
      </li>
      <li>
        <img src="/img/fonctionnalites.jpg">
        <div class="caption center-align">
        <h2 class="white-text">Nouvelle fonctionnalité !</h2 >
        <p class="white-text bold">Vous pouvez maintenant voir la disponibilité des vélos.</p>
        <a href="" class="bold">DÉCOUVRIR</a><br>
        @if(Auth::check())
        <a class="btn waves-effect" href="{{url('/reservationPass')}}">RÉSERVER SON PASS</a>
        @else
        <a class="btn waves-effect" href="{{ route('user.connect') }}">RÉSERVER SON PASS</a>
        @endif
        </div>
      </li>
    </ul>
  </div>

<div class="container section">
    <h2>DÉCOUVREZ NOS PARCOURS</h2>
    <img src="img/news.jpg" class="img img-responsive">
    <p>Les parcours vert, rouge, noir, bleu et jaune seront à votre disposition pendant tout l'événement !</p>
    <a href="" class="waves-effect waves-light btn-large center-align">EN SAVOIR PLUS</a>
</div>

<div class="divider"></div>
<div class="container section slogan">
    <h2>PLUS DE <span class="orange-text">35 MARQUES</span> ET <span class="orange-text">500 VÉLOS-TEST</span> !</h2>
</div>

<div class="divider"></div>
<div class="container section partners">
    <h2>PARTENAIRES</h2>
    <div class="carousel carousel-slider center">
   <a class="carousel-item" href="#one!"><img src="img/logo-gryon-tourisme.png"></a>
   <a class="carousel-item" href="#two!"><img src="img/logo-gryon-tourisme.png"></a>
  </div>
</div>
@endsection

@section('footer')
<div class="container">
<div class="section">
    <h2>INFOS PRATIQUE</h2>
    <p><a href="">GÉNÉRALITÉS</a></p>
    <p><a href="">PARCOURS</a></p>
    <p><a href="">TARIFS/HORAIRES</a></p>
    <p><a href="">ACCÈS/PLAN</a></p>
    <p><a href="">LOGEMENTS</a></p>
    <p><a href="">CONTACT</a></p>
    </div>
<a href="https://www.facebook.com/BikeGryon"><img class="socialMedia" src="img/FB.png" height="10rem" height="10rem" alt="Facebook logo"></a>
<p class="center">© 2020 BIKE TEST GRYON<a href="#wrapper" class="right"><i class="material-icons">expand_less</i></a></p>

</div>
@endsection

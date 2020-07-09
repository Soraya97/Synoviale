@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="slider welcome">
    <ul class="slides">
        <li>
            <img src="img/bike.jpg" alt="Un cycliste de dos">
            <div class="caption center-align">
                <h1 class="white-text desktopText">{{$edition->number}}<sup>e</sup> édition</h1>
                <h2 class="white-text desktopText">2-4 OCTOBRE 2020</h2>
                <p><a href="#!" class="bold desktopTextP">EN SAVOIR PLUS</a></p>
                <div class="row align-bottom">
                  <p class="col l5 show-on-medium-and-up"></p>
                @user
                  <p><a class="btn waves-effect col s12 l2" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a></p>
                  @else
                  <p><a class="btn waves-effect col s12 l2" href="{{ route('compte.login') }}">RÉSERVER SON PASS</a></p>
                @enduser
                <p class="col l5 show-on-medium-and-up"></p>
                </div>
            </div>
        </li>
        <li>
            <img src="img/fonctionnalites.jpg" alt="Un cycliste regardant le soleil couchant">
            <div class="caption center-align">
                <h2 class="white-text desktopText">Nouvelle fonctionnalité !</h2 >
                <p class="white-text bold desktopTextP">Vous pouvez maintenant voir la disponibilité des vélos.</p>
                <p><a href="#!" class="bold desktopTextP">DÉCOUVRIR</a><br></p>
                <div class="row align-bottom">
                  <p class="col l5 show-on-medium-and-up"></p>
                @user
                <p><a class="btn waves-effect col s12 l2" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a></p>
                @else
                <p><a class="btn waves-effect col s12 l2" href="{{ route('compte.connect') }}">RÉSERVER SON PASS</a></p>
                @enduser
                <p class="col l5 show-on-medium-and-up"></p>
                </div>
            </div>
        </li>
    </ul>
</div>

<div class="container section">
    <h2>DÉCOUVREZ NOS PARCOURS</h2>
    <div class="">
      <img src="img/news.jpg" class="img img-responsive" alt="Pré dans la montagne lors de la Golden Hour">
    </div>

    <p class="desktopTextP">Les parcours vert, rouge, noir, bleu et jaune seront à votre disposition pendant tout l'événement !</p>
    <div class="row">
      <a href="#!" class="waves-effect waves-light btn col s12 l2 right">EN SAVOIR PLUS</a>
    </div>
</div>

<div class="divider"></div>
<div class="container section slogan">
    <h2>PLUS DE <span class="orange-text">35 MARQUES</span> ET <span class="orange-text">500 VÉLOS-TEST</span> !</h2>
</div>

<div class="divider"></div>
<div class="container section partners">
    <h2 id="partners">PARTENAIRES</h2>
    <!-- partners logos on mobile device are on carousel style -->
      <div class="carousel carousel-slider center hide-on-med-and-up">
        <a class="carousel-item" href="#!"><img src="/img/logo-gryon-tourisme.png"></a>
        <a class="carousel-item" href="#!"><img src="/img/logo-skiclubgryon.png"></a>
        <a class="carousel-item" href="#!"><img src="/img/logo-gryon.png"></a>
        <a class="carousel-item" href="#!"><img src="/img/logo-detgcharlet.jpg"></a>
        <a class="carousel-item" href="#!"><img src="/img/logo-cookie.png"></a>
      </div>
      <!-- partners logos on desktop are placed horizontally -->
      <div class="hide-on-small-only">
        <img src="img/logo-gryon-tourisme.png">
        <img src="img/logo-skiclubgryon.png">
        <img src="img/logo-gryon.png">
        <img src="img/logo-detgcharlet.jpg">
        <img src="img/logo-cookie.png">
      </div>
</div>
@endsection

@section('footer')
<div class="container">
    <div class="section bold">
        <h2>INFOS PRATIQUES</h2>
        <p><a href="#!">GÉNÉRALITÉS</a></p>
        <p><a href="#!">PARCOURS</a></p>
        <p><a href="#!">TARIFS/HORAIRES</a></p>
        <p><a href="#!">ACCÈS/PLAN</a></p>
        <p><a href="#!">LOGEMENTS</a></p>
        <p><a href="#!">CONTACT</a></p>
    </div>
    <a href="https://www.facebook.com/BikeGryon" target="_blank"><img class="socialMedia" src="img/FB.png" height="10rem" height="10rem" alt="Logo de Facebook"></a>
    <p class="center">© 2020 BIKE TEST GRYON<a href="#wrapper" class="right"><i class="material-icons">expand_less</i></a></p>

</div>
@endsection

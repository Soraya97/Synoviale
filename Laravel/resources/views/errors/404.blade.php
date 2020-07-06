@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="container center-align">
  <h2><span class="orange-text">Désolé !</span> <br>Nous ne trouvons pas la page recherchée.</h2>
  <p>Retourner à <a href="/">l'accueil</a>.</p>
</div>
@endsection

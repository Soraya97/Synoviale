@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="bikeAvailable">
  <div class="greyBackground filterBike">
    <div class="container">
    <h2>FILTRE</h2>



    <div class="row">
        <div class="col s4 l2"><h3>MARQUE</h3></div>
        <div class="col s8 l10">
            <select class="input-field">
                <option value="Toutes" selected>Toutes</option>
                <option value="bleu">bleu</option>
            </select>
        </div>
    </div>

    <div class="row">
        <div class="col s3 l2"><h3>TYPE</h3></div>
        <div class="col s9 l10">
            <select class="input-field">
                <option value="VTT" selected>VTT</option>
            </select>
        </div>
    </div>
  </div>
</div>

<div class="container">
    <h2>LISTE DES VÉLOS DISPO</h2>
    <div class="collection">
      <a class="collection-item modal-trigger left-align black-text" href="#map">Vélo 1<span class="badge red-text">0</span></a>
      <a class="collection-item modal-trigger left-align black-text" href="#map">Vélo 2<span class="badge green-text">1</span></a>
    </div>
</div>

<div id="map" class="modal">
   <div class="modal-content">
     <a href="#!" class="modal-close btn-flat right">X</a>
     <h5>Stand n<sup>o</sup>2</h5>
     <img src="/img/map.jpg" alt="Plan du Bike Test Gryon" width="75%">
   </div>
   <div class="modal-footer"></div>
 </div>

</div>

@endsection

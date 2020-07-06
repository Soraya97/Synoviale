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
                @foreach($bikes as $bike)
                <option value="{{$bike->product->brand->name}}">{{$bike->product->brand->name}}</option>
                @endforeach



            </select>
        </div>
    </div>

    <div class="row">
        <div class="col s3 l2"><h3>TYPE</h3></div>
        <div class="col s9 l10">
            <select class="input-field">
              @foreach($bikes as $bike)
                <option value="{{$bike->type}}" selected>{{$bike->type}}</option>
              @endforeach
            </select>
        </div>
    </div>
  </div>
</div>

<div class="container">
    <h2>LISTE DES VÉLOS DISPO</h2>
    <div class="collection">
      @foreach($bikes as $bike)
      <a class="collection-item modal-trigger left-align black-text" href="#map">{{$bike->type}} {{$bike->product->brand->name}} {{$bike->product->shortDescr}}<span class="badge red-text">0</span></a>
      @endforeach
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

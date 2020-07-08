@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')

<div class="models container">
    <h2>MODÈLES DE VÉLOS</h2>
    <form id="bikeAvailable" method="get">
        <div class="row">
            <div class="col s4 l2"><h3>MARQUE</h3></div>
            <div class="col s8 l10">
                <select class="input-field" id="marque">
                    <option value="Toutes" selected>Toutes</option>
                    @foreach($products as $product)
                    <option value="{{$product->brand->name}}">{{$product->brand->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col s3 l2"><h3>TYPE</h3></div>
            <div class="col s9 l10">
                <select class="input-field" id="type">
                    @foreach($products as $product)
                    <option value="{{$product->bike->type}}" selected>{{$product->bike->type}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
          <button type="submit" class="btn col s12 l2 right">VALIDER</button>
        </div>

    </form>

    <hr>
    <ul class="collapsible" id="selectionBike">

    </ul>
</div>



@endsection

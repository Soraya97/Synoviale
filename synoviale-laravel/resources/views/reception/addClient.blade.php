@extends('template')

@section('nav')
@include('reception.nav')
@endsection

@section('contenu')
<div class="container">
    <p><a href="{{route('client.index')}}"><i class="material-icons">arrow_back</i>RETOUR À LA LISTE DES CLIENTS</a></p>

    <div class="greyBackground">

<div class="row">

  <form class="" action="{{route('client.store')}}" method="post">
      @csrf

      <div class="section">
           <h2>INFORMATIONS PERSONNELLES</h2>

      <div class="col s12 l6">
          <div class="{!! $errors->has('name') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="text" name="name" placeholder="Nom" class="validate">
              <label for="name">Nom *</label>
              {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('firstname') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="text" name="firstname" placeholder="Prénom" class="validate">
              <label for="firstname">Prénom *</label>
              {!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('email1') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="email" name="email1" placeholder="nomprenom@gmail.com" class="validate">
              <label for="email1">Email</label>
              {!! $errors->first('email1', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('email2') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="email" name="email2" placeholder="nomprenom@gmail.com" class="validate">
              <label for="email2">Email secondaire</label>
              {!! $errors->first('email2', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('phoneNumber1') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="text" name="phoneNumber1" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phoneNumber1">N° téléphone</label>
              {!! $errors->first('phoneNumber1', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('phoneNumber2') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="text" name="phoneNumber2" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phoneNumber2">N° téléphone secondaire</label>
              {!! $errors->first('phoneNumber2', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('comment') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="comment" placeholder="Quelque chose à ajouter ?" class="validate">
              <label for="comment">Commentaire</label>
              {!! $errors->first('comment', '<small class="help-block">:message</small>') !!}
          </div>
      </div>

      <div class="col l6 s12">
          <div class="{!! $errors->has('street1') ? 'has-error' : '' !!} input-field col l8 s9">
              <input type="text" name="street1" placeholder="Avenue des Sports 20" class="validate">
              <label for="street1">Rue</label>
              {!! $errors->first('street1', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('streetNumber') ? 'has-error' : '' !!} input-field col l4 s3">
              <input type="text" name="streetNumber" placeholder="8A" class="validate">
              <label for="streetNumber">N° de rue</label>
              {!! $errors->first('streetNumber', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('street2') ? 'has-error' : '' !!} input-field col l8 s9">
              <input type="text" name="street2" placeholder="Avenue des Alpes 20" class="validate">
              <label for="street2">Rue secondaire</label>
              {!! $errors->first('street2', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('POBox') ? 'has-error' : '' !!} input-field col l4 s3">
              <input type="text" name="POBox" placeholder="8A" class="validate">
              <label for="POBox">CP</label>
              {!! $errors->first('POBox', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('city') ? 'has-error' : '' !!} input-field col l8 s9">
              <input type="text" name="city" placeholder="8A" class="validate">
              <label for="city">Localité</label>
              {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('postaleCode') ? 'has-error' : '' !!} input-field col l4 s3">
              <input type="text" name="postaleCode" placeholder="1008" class="validate">
              <label for="postaleCode">NPA</label>
              {!! $errors->first('postaleCode', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('canton') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="text" name="canton" placeholder="Vaud" class="validate">
              <label for="canton">Canton</label>
              {!! $errors->first('canton', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('country') ? 'has-error' : '' !!} input-field col l6 s12">
              <input type="text" name="country" placeholder="Suisse" class="validate">
              <label for="country">Pays</label>
              {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
          </div>
      </div>

</div>

<div class="divider"></div>
<div class="section">
    <h2>CHOIX DES JOURS TESTS<h2>
            <div class="row">

                    <div class="col l4">
                        <label for="veMa" class="col s12">
                            <input type="checkbox" class="filled-in" name="" value="" id="veMa"/>
                            <span>VENDREDI 10h00 - 13h30</span>
                        </label>
                        <label for="veAp" class="col s12">
                            <input type="checkbox" class="filled-in" name="" value="" id="veAp"/>
                            <span>VENDREDI 13h30 - 17h00</span>
                        </label>
                    </div>

                    <div class="col l4">
                        <label for="saMa" class="col s12">
                            <input type="checkbox" class="filled-in" name="" value="" id="saMa"/>
                            <span>SAMEDI 10h00 - 13h30</span>
                        </label>
                        <label for="saAp" class="col s12">
                            <input type="checkbox" class="filled-in" name="" value="" id="saAp"/>
                            <span>SAMEDI 13h30 - 17h00</span>
                        </label>
                    </div>

                    <div class="col l4">
                        <label for="diMa" class="col s12">
                            <input type="checkbox" class="filled-in" name="" value="" id="dieMa"/>
                            <span>DIMANCHE 10h00 - 13h30</span>
                        </label>
                        <label for="diAp" class="col s12">
                            <input type="checkbox" class="filled-in" name="" value="" id="diAp"/>
                            <span>DIMANCHE 13h30 - 17h00</span>
                        </label>
                    </div>

                  </div>

                </div>
                <p class="right-align "></p>
                    <button type="submit" class="btn right">AJOUTER</button>

    </form>

         </div>

                    </div>

                    </div>
                    @endsection

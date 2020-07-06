@extends('template')

@section('nav')
@include('reception.nav')
@endsection

@section('contenu')
<div class="account container">
    <p><a href="{{url("listeClients")}}"><i class="material-icons">arrow_back</i>RETOUR À LA LISTE DES CLIENTS</a></p>

<div class="greyBackground">
      <div class="">
        <h2>INFORMATIONS PERSONNELLES</h2>
          <div class="row">
            <form class="" action="" method="post">
              @csrf

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
                  <div class="{!! $errors->has('email') ? 'has-error' : '' !!} input-field col l6 s12">
                      <input type="email" name="email1" placeholder="nomprenom@gmail.com" class="validate">
                      <label for="email1">Email</label>
                      {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                  </div>
                <div class="{!! $errors->has('email') ? 'has-error' : '' !!} input-field col l6 s12">
                    <input type="email" name="email2" placeholder="nomprenom@gmail.com" class="validate">
                    <label for="email2">Email secondaire</label>
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('phonenumber') ? 'has-error' : '' !!} input-field col l6 s12">
                    <input type="text" name="phonenumber1" placeholder="+ 41 79 360 16 26" class="validate">
                    <label for="phonenumber1">N° téléphone</label>
                    {!! $errors->first('phonenumber', '<small class="help-block">:message</small>') !!}
              </div>
                <div class="{!! $errors->has('phonenumber') ? 'has-error' : '' !!} input-field col l6 s12">
                    <input type="text" name="phonenumber2" placeholder="+ 41 79 360 16 26" class="validate">
                    <label for="phonenumber2">N° téléphone secondaire</label>
                    {!! $errors->first('phonenumber', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('comment') ? 'has-error' : '' !!} input-field col s12">
                    <input type="text" name="comment" placeholder="Quelque chose à ajouter ?" class="validate">
                    <label for="comment">Commentaire</label>
                    {!! $errors->first('comment', '<small class="help-block">:message</small>') !!}
                </div>
                </div>

                <div class="col l6">

              <div class="row">
                <div class="{!! $errors->has('street') ? 'has-error' : '' !!} input-field col l8 s10">
                    <input type="text" name="street1" placeholder="Avenue des Sports 20" class="validate">
                    <label for="street1">Rue</label>
                    {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="{!! $errors->has('streetnumber') ? 'has-error' : '' !!} input-field col l4 s2">
                    <input type="text" name="streetnumber" placeholder="8A" class="validate">
                    <label for="streetnumber">N° de rue</label>
                    {!! $errors->first('streetnumber', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="{!! $errors->has('street') ? 'has-error' : '' !!} input-field col l8 s10">
                    <input type="text" name="street2" placeholder="Avenue des Alpes 20" class="validate">
                    <label for="street2">Rue secondaire</label>
                    {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="{!! $errors->has('pobox') ? 'has-error' : '' !!} input-field col l4 s2">
                    <input type="text" name="pobox" placeholder="8A" class="validate">
                    <label for="pobox">CP</label>
                    {!! $errors->first('pobox', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="{!! $errors->has('city') ? 'has-error' : '' !!} input-field col l8 s10">
                    <input type="text" name="city" placeholder="8A" class="validate">
                    <label for="city">Localité</label>
                    {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="{!! $errors->has('postalecode') ? 'has-error' : '' !!} input-field col l4 s2">
                    <input type="text" name="postalecode" placeholder="1008" class="validate">
                    <label for="postalecode">postalecode</label>
                    {!! $errors->first('postalecode', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('canton') ? 'has-error' : '' !!} input-field col l6 s12">
                    <input type="text" name="canton" placeholder="Vaud" class="validate">
                    <label for="canton">Pays</label>
                    {!! $errors->first('canton', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('country') ? 'has-error' : '' !!} input-field col l6 s12">
                    <input type="text" name="country" placeholder="Suisse" class="validate">
                    <label for="country">Pays</label>
                    {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
                </div>
                </div>
              </div>
              <button type="submit" class="btn right" href="#">Enregistrer</button>
            </form>
          </div>
      </div>

<!-- Section for the reservation's status -->
<div class="divider"></div>
<div class="section">
  <h2>STATUT DE LA RÉSERVATION</h2>
    <div class="row">

      <div class="col s12">
        <ul class="tabs">
          <li class="tab col s3"><a href="#vendrediAM"><i class="material-icons">clear</i>VENDREDI AM</a></li>
          <li class="tab col s3"><a href="#vendrediPM"><i class="material-icons">done</i>VENDREDI PM</a></li>
          <li class="tab col s3"><a href="#samediAM"><i class="material-icons">clear</i>SAMEDI AM</a></li>
          <li class="tab col s3"><a href="#dimanchePM"><i class="material-icons">done</i>DIMANCHE PM</a></li>
        </ul>
      </div>

      <div id="vendrediAM" class="col s12">
        <h3>ÉTAT DU QR CODE</h3>
        <div class="row valign-wrapper">
          <img src="img/qrcode.png" alt="QR code" class="col s2">
            <p class="col l4">Le paiement n'a pas encore été effectué</p>
            <div class="right col l4">
              <a href="#" class="btn green">ACTIVER</a>
              <a href="#" class="btn red disabled">DÉSACTIVER</a>
            </div>
        </div>
      </div>

      <div id="vendrediPM" class="col s12">
        <h3>ÉTAT DU QR CODE</h3>
          <div class="row valign-wrapper">
            <img src="img/qrcode.png" alt="QR code" class="col s2">
              <p class="col l4">Le paiement a  été effectué</p>
              <div class="right col l4">
                <a href="#" class="btn green disabled">ACTIVER</a>
                <a href="#" class="btn red">DÉSACTIVER</a>
              </div>
          </div>
      </div>

      <div id="samediAM" class="col s12">SAMEDI AM</div>
      <div id="dimanchePM" class="col s12">DIMANCHE PM</div>

    </div>
</div>

<!-- Choice of the tests days -->
<div class="divider"></div>
<div class="section">
  <h2>CHOIX DES JOURS TESTS<h2>
    <div class="row">
          <form method="post" action="">
      @csrf
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
     <button type="submit" class="btn right">AJOUTER</button>
  </form>
   </div>
 </div>
</div>
</div>
@endsection

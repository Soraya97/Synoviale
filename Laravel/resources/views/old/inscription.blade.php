@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="greyBackground">

<div class="account container">
    <h2>INSCRIPTION</h2>
    <div class="row">
      <div class="col s12">
        <ul id="tabs-swipe-demo" class="tabs greyBackground">
          <li class="tab col s3 disabled"><a href="#infos" class="active">1 INFOS PERSOS</a></li>
          <li class="tab col s3 disabled"><a href="#jours">2 JOURS</a></li>
          <li class="tab col s3 disabled"><a href="#paiement">3 PAIEMENT</a></li>
        </ul>
        </div>
<div id="infos" class="col s12">
    <div class="row">
      <form class="col s12" action="" method="post">
        @csrf

          <div class="{!! $errors->has('name') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="name" placeholder="Nom" class="validate">
              <label for="name">Nom *</label>
              {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
          </div>

            <div class="{!! $errors->has('firstName') ? 'has-error' : '' !!} input-field col s12">
                <input type="text" name="firstName" placeholder="Prénom" class="validate">
                <label for="firstName">Prénom *</label>
                {!! $errors->first('firstName', '<small class="help-block">:message</small>') !!}
            </div>

          <div class="{!! $errors->has('email') ? 'has-error' : '' !!} input-field col s12">
              <input type="email" name="email2" placeholder="nomprenom@gmail.com" class="validate">
              <label for="email2">Email secondaire</label>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('phonenumber') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="phonenumber1" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phonenumber1">N° téléphone</label>
              {!! $errors->first('phonenumber', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('phonenumber') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="phonenumber2" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phonenumber2">N° téléphone secondaire</label>
              {!! $errors->first('phonenumber', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('street') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="street1" placeholder="Avenue des Sports 20" class="validate">
              <label for="street1">Rue</label>
              {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('streetnumber') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="streetnumber" placeholder="8A" class="validate">
              <label for="streetnumber">N° de rue</label>
              {!! $errors->first('streetnumber', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('street') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="street2" placeholder="Avenue des Alpes 20" class="validate">
              <label for="street2">Rue secondaire</label>
              {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('pobox') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="pobox" placeholder="8A" class="validate">
              <label for="pobox">CP</label>
              {!! $errors->first('pobox', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('city') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="city" placeholder="8A" class="validate">
              <label for="city">Localité</label>
              {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('postalecode') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="postalecode" placeholder="1008" class="validate">
              <label for="postalecode">postalecode</label>
              {!! $errors->first('postalecode', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('country') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="country" placeholder="Suisse" class="validate">
              <label for="country">Pays</label>
              {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('comment') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="comment" placeholder="Quelque chose à ajouter ?" class="validate">
              <label for="comment">Commentaire</label>
              {!! $errors->first('comment', '<small class="help-block">:message</small>') !!}
          </div>
        </div>
        <button type="submit" class="btn" href="#jours">SUIVANT</button>
      </form>
    </div>
</div>

<div id="jours" class="col s12"></div>

<div id="paiement" class="col s12"></div>

</form>
</div>
  </div>
@endsection

@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="greyBackground">

<div class="account container">


    <div class="row">

      <form class="col s12" action="{{ route('user.create') }}" method="post">
        @csrf
        <h2>CRÉATION D'UN COMPTE</h2>
          <div class="{!! $errors->has('username') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="username" placeholder="057018945120238" class="validate">
              <label for="username">Identifiant utilisateur</label>
              {!! $errors->first('username', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('password') ? 'has-error' : '' !!} input-field col s12 l6">
              <input type="password" name="password" placeholder="• • • • • • • • • • • •" class="validate">
              <label for="password">Mot de passe</label>
              {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="input-field col s12 l6">
              <input type="password" name="password_confirmation" placeholder="• • • • • • • • • • • •" class="validate">
              <label for="password_confirmation">Confirmation de mot de passe</label>
              {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('email') ? 'has-error' : '' !!} input-field col s12 l6">
              <input type="email" name="email" placeholder="example@gmail.com" class="validate">
              <label for="email">Email</label>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="input-field col s12 l6">
              <input type="email" name="email1_confirmation" placeholder="example@gmail.com" class="validate">
              <label for="email1_confirmation">Confirmation email</label>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>

<div class="row">

          <h2>INSCRIPTION</h2>
          <div class="col l6">


          <div class="{!! $errors->has('name') ? 'has-error' : '' !!} input-field col s12 l6">
              <input type="text" name="name" placeholder="Nom" class="validate">
              <label for="name">Nom *</label>
              {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
          </div>

            <div class="{!! $errors->has('firstname') ? 'has-error' : '' !!} input-field col s12 l6">
                <input type="text" name="firstname" placeholder="Prénom" class="validate">
                <label for="firstname">Prénom *</label>
                {!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
            </div>

          <div class="{!! $errors->has('email2') ? 'has-error' : '' !!} input-field col s12 l6">
              <input type="email" name="email2" placeholder="nomprenom@gmail.com" class="validate">
              <label for="email2">Email secondaire</label>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('phonenumber') ? 'has-error' : '' !!} input-field col s12 l6">
              <input type="text" name="phonenumber1" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phonenumber1">N° téléphone</label>
              {!! $errors->first('phonenumber', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('phonenumber') ? 'has-error' : '' !!} input-field col s12 l6">
              <input type="text" name="phonenumber2" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phonenumber2">N° téléphone secondaire</label>
              {!! $errors->first('phonenumber', '<small class="help-block">:message</small>') !!}
          </div>
  </div>
  <div class="col l6">


          <div class="{!! $errors->has('street') ? 'has-error' : '' !!} input-field col s12 l8">
              <input type="text" name="street1" placeholder="Avenue des Sports 20" class="validate">
              <label for="street1">Rue</label>
              {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('streetnumber') ? 'has-error' : '' !!} input-field col s12 l4">
              <input type="text" name="streetnumber" placeholder="8A" class="validate">
              <label for="streetnumber">N° de rue</label>
              {!! $errors->first('streetnumber', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('street') ? 'has-error' : '' !!} input-field col s12 l8">
              <input type="text" name="street2" placeholder="Avenue des Alpes 20" class="validate">
              <label for="street2">Rue secondaire</label>
              {!! $errors->first('street', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('pobox') ? 'has-error' : '' !!} input-field col s12 l4">
              <input type="text" name="pobox" placeholder="8A" class="validate">
              <label for="pobox">CP</label>
              {!! $errors->first('pobox', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('city') ? 'has-error' : '' !!} input-field col s12 l8">
              <input type="text" name="city" placeholder="8A" class="validate">
              <label for="city">Localité</label>
              {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('postalecode') ? 'has-error' : '' !!} input-field col s12 l4">
              <input type="text" name="postalecode" placeholder="1008" class="validate">
              <label for="postalecode">NPA</label>
              {!! $errors->first('postalecode', '<small class="help-block">:message</small>') !!}
          </div>

          <div class="{!! $errors->has('country') ? 'has-error' : '' !!} input-field col s12 l6">
              <input type="text" name="country" placeholder="Suisse" class="validate">
              <label for="country">Pays</label>
              {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
          </div>
</div>
          <div class="{!! $errors->has('comment') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="comment" placeholder="Quelque chose à ajouter ?" class="validate">
              <label for="comment">Commentaire</label>
              {!! $errors->first('comment', '<small class="help-block">:message</small>') !!}
          </div>

        </div>
          <button type="submit" class="btn right modal-trigger" href="#confirmCreation">CRÉER</button>
        </form>
        </div>

    </div>

    <!-- <div id="confirmCreation" class="modal">
      <div class="modal-content">
        <p>Votre compte a bien été créé</p>
      </div>
      <div class="modal-footer">
        <a href="{{url("login")}}" class="modal-close waves-effect waves-green btn-flat">SE CONNECTER</a>
      </div>
    </div> -->

    </div>
@endsection

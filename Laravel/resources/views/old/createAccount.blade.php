@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="greyBackground">

<div class="account container">
    <h2>CRÉATION D'UN COMPTE</h2>

    <div class="row">
      <form class="col s12" action="{{ route('creerCompte.store') }}" method="post">
        @csrf
          <div class="{!! $errors->has('ID') ? 'has-error' : '' !!} input-field col s12">
              <input type="text" name="ID" placeholder="057018945120238" class="validate">
              <label for="ID">Identifiant utilisateur</label>
              {!! $errors->first('ID', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('password') ? 'has-error' : '' !!} input-field col s12">
              <input type="password" name="password" placeholder="• • • • • • • • • • • •" class="validate">
              <label for="password">Mot de passe</label>
              {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="input-field col s12">
              <input type="password" name="password_confirmation" placeholder="• • • • • • • • • • • •" class="validate">
              <label for="password_confirmation">Confirmation de mot de passe</label>
              {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="{!! $errors->has('email') ? 'has-error' : '' !!} input-field col s12">
              <input type="email" name="email1" placeholder="example@gmail.com" class="validate">
              <label for="email1">Email</label>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>
          <div class="input-field col s12">
              <input type="email" name="email1_confirmation" placeholder="example@gmail.com" class="validate">
              <label for="email1_confirmation">Confirmation email</label>
              {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
          </div>
        </div>
        <button type="submit" class="btn center-align modal-trigger" href="#confirmCreation">CRÉER</button>
      </form>
    </div>

    <div id="confirmCreation" class="modal">
      <div class="modal-content">
        <p>Votre compte a bien été créé</p>
      </div>
      <div class="modal-footer">
        <a href="{{url("login")}}" class="modal-close waves-effect waves-green btn-flat">SE CONNECTER</a>
      </div>
    </div>

    </div>
@endsection

@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="greyBackground">

    <div class="container">

        <div class="row">

            <form class="col s12" action="{{ route('user.update') }}" method="post">
                @csrf

                <h2>MODIFICATION DES DONNÉES</h2>
                <div class="{!! $errors->has('username') ? 'has-error' : '' !!} input-field col s12">
                    <input type="text" name="username" value="{{$user->person->name}}" class="validate">
                    <label for="username">Identifiant utilisateur</label>
                    {!! $errors->first('username', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('password') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="password" name="password" value="• • • • • • • • • • • •" class="validate">
                    <label for="password">Mot de passe</label>
                    {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="input-field col s12 l6">
                    <input type="password" name="password_confirmation" value="• • • • • • • • • • • •" class="validate">
                    <label for="password_confirmation">Confirmation de mot de passe</label>
                    {!! $errors->first('password', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('email') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="email" name="email" value="example@gmail.com" class="validate">
                    <label for="email">Email</label>
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="input-field col s12 l6">
                    <input type="email" name="email_confirmation" value="example@gmail.com" class="validate">
                    <label for="email_confirmation">Confirmation email</label>
                    {!! $errors->first('email', '<small class="help-block">:message</small>') !!}
                </div>

                <h2>INSCRIPTION</h2>
                <div class="{!! $errors->has('name') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="text" name="name" value="Nom" class="validate">
                    <label for="name">Nom *</label>
                    {!! $errors->first('name', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('firstname') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="text" name="firstname" value="Prénom" class="validate">
                    <label for="firstname">Prénom *</label>
                    {!! $errors->first('firstname', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('email2') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="email" name="email2" value="nomprenom@gmail.com" class="validate">
                    <label for="email2">Email secondaire</label>
                    {!! $errors->first('email2', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('phoneNumber1') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="text" name="phoneNumber1" value="+ 41 79 360 16 26" class="validate">
                    <label for="phoneNumber1">N° téléphone</label>
                    {!! $errors->first('phoneNumber1', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('phoneNumber2') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="text" name="phoneNumber2" value="+ 41 79 360 16 26" class="validate">
                    <label for="phoneNumber2">N° téléphone secondaire</label>
                    {!! $errors->first('phoneNumber2', '<small class="help-block">:message</small>') !!}
                </div>

                <div class="{!! $errors->has('street1') ? 'has-error' : '' !!} input-field col s12 l8">
                    <input type="text" name="street1" value="Avenue des Sports 20" class="validate">
                    <label for="street1">Rue</label>
                    {!! $errors->first('street1', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('streetNumber') ? 'has-error' : '' !!} input-field col s12 l4">
                    <input type="text" name="streetNumber" value="8A" class="validate">
                    <label for="streetNumber">N° de rue</label>
                    {!! $errors->first('streetNumber', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('street2') ? 'has-error' : '' !!} input-field col s12 l8">
                    <input type="text" name="street2" value="Avenue des Alpes 20" class="validate">
                    <label for="street2">Rue secondaire</label>
                    {!! $errors->first('street2', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('POBox') ? 'has-error' : '' !!} input-field col s12 l4">
                    <input type="text" name="POBox" value="8A" class="validate">
                    <label for="POBox">CP</label>
                    {!! $errors->first('POBox', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('city') ? 'has-error' : '' !!} input-field col s12 l8">
                    <input type="text" name="city" value="8A" class="validate">
                    <label for="city">Localité</label>
                    {!! $errors->first('city', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('postalCode') ? 'has-error' : '' !!} input-field col s12 l4">
                    <input type="text" name="postalCode" value="1008" class="validate">
                    <label for="postalCode">NPA</label>
                    {!! $errors->first('postalCode', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('country') ? 'has-error' : '' !!} input-field col s12 l6">
                    <input type="text" name="country" value="Suisse" class="validate">
                    <label for="country">Pays</label>
                    {!! $errors->first('country', '<small class="help-block">:message</small>') !!}
                </div>
                <div class="{!! $errors->has('comment') ? 'has-error' : '' !!} input-field col s12">
                    <input type="text" name="comment" value="Quelque chose à ajouter ?" class="validate">
                    <label for="comment">Commentaire</label>
                    {!! $errors->first('comment', '<small class="help-block">:message</small>') !!}
                </div>
                <button type="submit" class="btn right modal-trigger" href="#confirmCreation">CRÉER</button>

            </form>

        </div>

    </div>

</div>
@endsection

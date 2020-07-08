@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
    <div class="container">

        <div class="row">

            <form class="col s12" action="{{route('user.update', [$user->id])}}" method="post">
                @csrf

                <h2>MODIFICATION DES DONNÉES</h2>
                <div class="@error('username') is-invalid @enderror input-field col s12">
                    <input type="text" name="username" value="{{$user->username}}" class="validate">
                    <label for="username">Identifiant utilisateur *</label>
                    @error('username')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('password') is-invalid @enderror input-field col s12 l6">
                    <input type="password" name="password" value="{{$user->password}}" class="validate">
                    <label for="password">Mot de passe *</label>
                    @error('password')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="input-field col s12 l6">
                    <input type="password" name="password_confirmation" placeholder="• • • • • • • • • • • •" class="validate">
                    <label for="password_confirmation">Confirmation de mot de passe *</label>
                    @error('password')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('email') is-invalid @enderror input-field col s12 l6">
                    <input type="email" name="email" value="{{$user->email}}" class="validate">
                    <label for="email">Email *</label>
                    @error('email')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="input-field col s12 l6">
                    <input type="email" name="email_confirmation" placeholder="Confirmation" class="validate">
                    <label for="email_confirmation">Confirmation email *</label>
                    @error('email')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>

                <div class="@error('name') is-invalid @enderror input-field col s12 l6">
                    <input type="text" name="name" value="{{$user->person->name}}" class="validate">
                    <label for="name">Nom *</label>
                    @error('name')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('firstname') is-invalid @enderror input-field col s12 l6">
                    <input type="text" name="firstname" value="{{$user->person->firstname}}" class="validate">
                    <label for="firstname">Prénom *</label>
                    @error('firstname')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('email2') is-invalid @enderror input-field col s12 l6">
                    <input type="email" name="email2" value="{{$user->person->email2}}" class="validate">
                    <label for="email2">Email secondaire</label>
                    @error('email2')<div class="alert alert-danger">{{ $message }}</div>@enderror
                </div>
                <div class="@error('phoneNumber1') is-invalid @enderror input-field col s12 l6">
                    <input type="text" name="phoneNumber1" value="{{$user->person->phoneNumber1}}" class="validate">
                    <label for="phoneNumber1">N° téléphone</label>
                    @error('phoneNumber1')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('phoneNumber2') is-invalid @enderror input-field col s12 l6">
                    <input type="text" name="phoneNumber2" value="{{$user->person->phoneNumber2}}" class="validate">
                    <label for="phoneNumber2">N° téléphone secondaire</label>
                    @error('phoneNumber2')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>

                <div class="@error('street1') is-invalid @enderror input-field col s12 l8">
                    <input type="text" name="street1" value="@if(($user->person->address) == null)@else{{$user->person->address->street1}}@endif" class="validate">
                    <label for="street1">Rue</label>
                    @error('street1')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('streetNumber') is-invalid @enderror input-field col s12 l4">
                    <input type="text" name="streetNumber" value="@if(($user->person->address) == null)@else{{$user->person->address->streetNumber}}@endif" class="validate">
                    <label for="streetNumber">N° de rue</label>
                    @error('streetNumber')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('street2') is-invalid @enderror input-field col s12 l8">
                    <input type="text" name="street2" value="@if(($user->person->address) == null)@else{{$user->person->address->street2}}@endif" class="validate">
                    <label for="street2">Rue secondaire</label>
                    @error('street2')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('POBox') is-invalid @enderror input-field col s12 l4">
                    <input type="text" name="POBox" value="@if(($user->person->address) == null)@else{{$user->person->address->POBox}}@endif" class="validate">
                    <label for="POBox">CP</label>
                    @error('POBox')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('city') is-invalid @enderror input-field col s12 l8">
                    <input type="text" name="city" value="@if(($user->person->address) == null)@else{{$user->person->address->city->name}}@endif" class="validate">
                    <label for="city">Localité</label>
                    @error('city')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('postalCode') is-invalid @enderror input-field col s12 l4">
                    <input type="text" name="postalCode" value="@if(($user->person->address) == null)@else{{$user->person->address->city->postalCode}}@endif" class="validate">
                    <label for="postalCode">NPA</label>
                    @error('postalCode')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('country') is-invalid @enderror input-field col s12 l6">
                    <input type="text" name="country" value="@if(($user->person->address) == null)@else{{$user->person->address->city->country->name}}@endif" class="validate">
                    <label for="country">Pays</label>
                    @error('country')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="@error('comment') is-invalid @enderror input-field col s12">
                    <input type="text" name="comment" value="{{$user->person->comment}}" class="validate">
                    <label for="comment">Commentaire</label>
                    @error('comment')<small class="alert alert-danger red-text">{{ $message }}</small>@enderror
                </div>
                <div class="row">
                  <p><button type="submit" class="btn right modal-trigger col s12 l3 right">ENREGISTRER</button></p>
                  <p><a href="javascript:history.back()" class="btn col s12 l3">RETOUR</a></p>
                </div>


            </form>

        </div>

    </div>
@endsection

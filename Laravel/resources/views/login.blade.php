@extends('template')

@section('nav')
@include('nav')
@endsection

@section('contenu')
<div class="container">
  <h2>CONNEXION</h2>
  <p>Vous devez avoir un compte pour réserver votre pass.</p>
    <div class="row">
        <div class="col s12">
                    <form method="POST" action="{{ route('compte.connect') }}">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                              <label for="username">ID</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="input-field col s12">
                                <label for="password">Mot de passe</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<<<<<<< HEAD
=======


<div class="input-field center-align">
  <div class="s12">
    <p>Pas de compte ?</p>
    <a href="{{route('compte.create')}}">CRÉER UN COMPTE</a>
  </div>
</div>


>>>>>>> a3d3c9228bbd8b0b0c2053db285e00ac3e73b520
                        <div class="input-field center-align">
                            <div class="s12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Se connecter') }}
                                </button>

                            </div>
                        </div>
                    </form>
        </div>
    </div>

    <div class="input-field center-align">
      <div class="s12">
        <p>Pas de compte ?</p>
        <a href="{{route('user.create')}}">CRÉER UN COMPTE</a>
      </div>
    </div>

</div>
@endsection

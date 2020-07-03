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
                    <form method="POST" action="">
                        @csrf

                        <div class="row">
                            <div class="input-field col s12">
                              <label for="email">ID</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
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


<div class="input-field center-align">
  <div class="s12">
    <p>Pas de compte ?</p>
    <a href="{{route('compte.create')}}">CRÉER UN COMPTE</a>

  </div>
</div>


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
</div>
@endsection

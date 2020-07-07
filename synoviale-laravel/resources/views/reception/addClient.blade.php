@extends('template')

@section('nav')
@include('reception.nav')
@endsection

@section('contenu')
<div class="greyBackgroundContainer">

<div class="container">

<div class="row">

  <form class="" action="{{route('client.store')}}" method="post">
      @csrf

      <div class="section">
           <h2>INFORMATIONS PERSONNELLES</h2>

      <div class="col s12 l6">
          <div class="@error('name') is-invalid @enderror input-field col l6 s12">
              <input type="text" name="name" placeholder="Nom" class="validate">
              <label for="name">Nom *</label>
              @error('name')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('firstname') is-invalid @enderror input-field col l6 s12">
              <input type="text" name="firstname" placeholder="Prénom" class="validate">
              <label for="firstname">Prénom *</label>
              @error('firstname')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('email') is-invalid @enderror input-field col l6 s12">
              <input type="email" name="email" placeholder="nomprenom@gmail.com" class="validate">
              <label for="email">Email</label>
              @error('email')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('email2') is-invalid @enderror input-field col l6 s12">
              <input type="email" name="email2" placeholder="nomprenom@gmail.com" class="validate">
              <label for="email2">Email secondaire</label>
              @error('email2')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('phoneNumber1') is-invalid @enderror input-field col l6 s12">
              <input type="text" name="phoneNumber1" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phoneNumber1">N° téléphone</label>
              @error('phoneNumber1')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('phoneNumber2') is-invalid @enderror input-field col l6 s12">
              <input type="text" name="phoneNumber2" placeholder="+ 41 79 360 16 26" class="validate">
              <label for="phoneNumber2">N° téléphone secondaire</label>
              @error('phoneNumber2')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('comment') is-invalid @enderror input-field col s12">
              <input type="text" name="comment" placeholder="Quelque chose à ajouter ?" class="validate">
              <label for="comment">Commentaire</label>
              @error('comment')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
      </div>

      <div class="col l6 s12">
          <div class="@error('street1') is-invalid @enderror input-field col l8 s9">
              <input type="text" name="street1" placeholder="Avenue des Sports 20" class="validate">
              <label for="street1">Rue</label>
              @error('street1')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('streetNumber') is-invalid @enderror input-field col l4 s3">
              <input type="text" name="streetNumber" placeholder="8A" class="validate">
              <label for="streetNumber">N° de rue</label>
              @error('streetNumber')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('street2') is-invalid @enderror input-field col l8 s9">
              <input type="text" name="street2" placeholder="Avenue des Alpes 20" class="validate">
              <label for="street2">Rue secondaire</label>
              @error('street2')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('POBox') is-invalid @enderror input-field col l4 s3">
              <input type="text" name="POBox" placeholder="8A" class="validate">
              <label for="POBox">CP</label>
              @error('POBox')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('city') is-invalid @enderror input-field col l8 s9">
              <input type="text" name="city" placeholder="8A" class="validate">
              <label for="city">Localité</label>
              @error('city')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('postaleCode') is-invalid @enderror input-field col l4 s3">
              <input type="text" name="postaleCode" placeholder="1008" class="validate">
              <label for="postaleCode">NPA</label>
              @error('postaleCode')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('canton') is-invalid @enderror input-field col l6 s12">
              <input type="text" name="canton" placeholder="Vaud" class="validate">
              <label for="canton">Canton</label>
              @error('canton')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
          <div class="@error('country') is-invalid @enderror input-field col l6 s12">
              <input type="text" name="country" placeholder="Suisse" class="validate">
              <label for="country">Pays</label>
              @error('country')<div class="alert alert-danger red-text">{{ $message }}</div>@enderror
          </div>
      </div>

</div>

<div class="divider"></div>
<div class="section">
    <h2>CHOIX DES JOURS TESTS</h2>
            <div class="row">

                    <div class="col l4">
                      <h5>VENDREDI 02.10.2020</h5><br>
                      @foreach($days as $day)
                      @if($day->date == '02.10.2020')
                          <label for="{{$day->id}}">
                              <input type="checkbox" class="filled-in" name="date[]" value="{{$day->id}}" id="{{$day->id}}"/>
                              <span>VENDREDI {{$day->startHour}} - {{$day->endHour}}</span>
                          </label><br><br>
                      @endif
                      @endforeach
                     </div>

                    <div class="col l4">
                      <h5>SAMEDI 03.10.2020</h5><br>
                      @foreach($days as $day)
                      @if($day->date == '03.10.2020')

                          <label for="{{$day->id}}">
                              <input type="checkbox" class="filled-in" name="date[]" value="{{$day->id}}" id="{{$day->id}}"/>
                              <span>SAMEDI {{$day->startHour}} - {{$day->endHour}}</span>
                          </label><br><br>
                      @endif
                      @endforeach
                    </div>

                    <div class="col l4">
                      <h5>DIMANCHE 04.10.2020</h5><br>
                      @foreach($days as $day)
                      @if($day->date == '04.10.2020')
                          <label for="{{$day->id}}">
                              <input type="checkbox" class="filled-in" name="date[]" value="{{$day->id}}" id="{{$day->id}}"/>
                              <span>DIMANCHE {{$day->startHour}} - {{$day->endHour}}</span>
                          </label><br><br>
                      @endif
                      @endforeach
                    </div>

                  </div>
<p class="bold red-text right-align">  <i class="material-icons">report</i>Cliquez sur ajouter dès que le client a payé</p>
                </div>

                <div class="row">
                  <button type="submit" class="btn right col l2 s12">AJOUTER</button>
                </div>


    </form>

         </div>

                    </div>

                    </div>
                    @endsection

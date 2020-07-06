@extends('template')

@section('nav')
@include('companies.nav')
@endsection

@section('contenu')
<div class="container">

<div class="row">
  <br>
  <div class="col l7 s12 greyBackground">
    <h2>COMMENCER UN TEST</h2>
    <form id="scanQR" method="get">
      <div class="row">
          <div class="col l10 s12">Marque du vélo</div>
          <div class="col l10 s12">
              <select class="input-field" id="marque">
                  <option value="Yeti" selected>Yeti</option>
                  <option value="Orange">Orange</option>
              </select>
          </div>
        </div>

        <div class="row">
        <div class="col l10 s12">Nom du vélo</div>
        <div class="col l10 s12">
            <select class="input-field" id="nom">
                <option value="Vélo 1" selected>Vélo 1</option>
                <option value="Vélo 2">Vélo 2</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn">SCANNER LE QR CODE</button>
</form>
<br>
</div>

  <div class="col l5 s12">
<h2>TESTS EN COURS</h2>
<div id="tests">
  <div class="row">
    <div class="col s12 m12">
      <div class="card greyBackground">
        <div class="card-content">
          <p>Nom 1 Prénom 1</p>
          <p>VTT Yéti</p>
          <p>13h02</p>
        </div>
        <div class="card-action">
          <a class="btn modal-trigger orange-light black-text" href="#endTest">TERMINER LE TEST</a>
        </div>
      </div>
    </div>
  </div>
</div>

  </div>
</div>

<div id="endTest" class="modal greyBackground">
  <div class="modal-content">
        <h2>TERMINER LE TEST ?</h2>
</div>
  <div class="modal-footer">
    <a class="btn modal-trigger modal-close" href="#feedback">CONFIRMER</a>
    <a href="#!" class="btn-flat modal-close orange-light black-text">ANNULER</a>
  </div>
</div>

<div id="feedback" class="modal greyBackground">
  <div class="modal-content">
    <h2 class="center">AJOUTER UN FEEDBACK</h2>
    <div class="row">
      <div class="col s6">
        <div class="row">
        <div class="col s6">
          <p>CONFORT</p>
          @for ($i = 0; $i < 5; $i++)
          <i class="material-icons">star_border</i>
          @endfor
          <p>MANIABILITÉ</p>
          @for ($i = 0; $i < 5; $i++)
          <i class="material-icons">star_border</i>
          @endfor
          </div>
          <div class="col s6">
          <p>DESIGN</p>
          @for ($i = 0; $i < 5; $i++)
          <i class="material-icons">star_border</i>
          @endfor
          <p>PERFORMANCE</p>
          @for ($i = 0; $i < 5; $i++)
          <i class="material-icons">star_border</i>
          @endfor
        </div>
        </div>
      </div>
<div class="col s6">
    <form class="col s12">
        <div class="row">
          <div class="input-field col s12">
            <input id="positive" type="text" class="validate">
            <label for="positive">Les +</label>
          </div>
          <div class="input-field col s12">
            <input id="negative" type="text" class="validate">
            <label for="negative">Les -</label>
          </div>
        </div>
      </form>
</div>
    </div>
  </div>
  <div class="modal-footer center">
    <a href="#!" class="modal-close btn">CONFIRMER</a>
    <a href="#!" class="modal-close btn orange-light black-text">IGNORER</a>
  </div>
</div>

    </div>
@endsection

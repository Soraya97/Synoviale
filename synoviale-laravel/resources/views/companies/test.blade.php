@extends('template')

@section('nav')
@include('companies.nav')
@endsection

@section('contenu')
{{--<!-- todo: store tests informations in database from controller and display real informations of bikes -->--}}
<div id="startTest" class="container">

    <div class="row">
        <br>
        <div class="col l7 s12 greyBackground">
            <h2>COMMENCER UN TEST</h2>
            <form method="get">
                <div class="row">
                    <div class="col s12">Marque du vélo</div>
                    <div class="col s12">
                        <select class="input-field" id="marque">
                            <option value="Yeti" selected>Yeti</option>
                            <option value="Orange">Orange</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">Nom du vélo</div>
                    <div class="col s12">
                        <select class="input-field" id="nom">
                            <option value="Vélo 1" selected>Vélo 1</option>
                            <option value="Vélo 2">Vélo 2</option>
                        </select>
                    </div>
                </div>
                  <div class="input-field center-align row">
                      <div class="s12">
                <button type="submit" class="btn modal-trigger" href="#scanQR">SCANNER LE QR CODE</button>
              </div>
            </div>
            </form>
            <br>
        </div>

        <div class="col l5 s12">
            <h2>TESTS EN COURS</h2>
            <div id="tests">

            </div>

        </div>
    </div>

    <div id="scanQR" class="modal greyBackground">
        <div class="modal-content">
            <form action="" method="post">
              <div class="row">
                <div class="input-field col s12">
                <input type="text" id="code" class="autocomplete">
                <label for="code">Code</label>
        </div>
      </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn" ><a href="#" class="modal-close white-text">CONFIRMER</a></button>
            <a href="#!" class="btn-flat modal-close orange-light black-text">ANNULER</a>
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
            <a href="#!" class="modal-close btn" id="endTestFeedback">CONFIRMER</a>
            <a href="#!" class="modal-close btn orange-light black-text">IGNORER</a>
        </div>
    </div>

</div>
@endsection

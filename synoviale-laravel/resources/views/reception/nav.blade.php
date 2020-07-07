
<!-- menu on mobile -->
<ul class="sidenav" id="mobile">
    <li class="right"><a class="sidenav-close"><i class="material-icons">close</i></a></li>
    <li><a href="{{url('/')}}">BIKE TEST GRYON</a></li>
    <li><a href="{{url("ajouterClient")}}">AJOUTER UN CLIENT</a></li>
    <li><a href="{{url("listeClients")}}">LISTE DE CLIENTS</a></li>
    @if(Auth::check())
    <li><a href="{{url("logout")}}" class="btn-small">SE DÉCONNECTER</a></li>
    @else
    <li><a href="{{url("login")}}" class="btn-small">SE CONNECTER</a></li>
    @endif
</ul>
<!-- menu on browser -->
<nav>
    <div class="nav-wrapper container">
        <a href="#" data-target="mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
        <a href="{{url('/')}}" class="brand-logo left"><img src="/synoviale/img/logoBlanc.png" alt="Bike Test Gryon"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{url("ajouterClient")}}">AJOUTER UN CLIENT</a></li>
            <li><a href="{{ route('client.index') }}">LISTE DE CLIENTS</a></li>
            @if(Auth::check())
            <li><a href="{{url("logout")}}" class="btn-small">SE DÉCONNECTER</a></li>
            @else
            <li><a href="{{url("login")}}" class="btn-small">SE CONNECTER</a></li>
            @endif
        </ul>
    </div>
</nav>

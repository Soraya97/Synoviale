
<!-- menu on mobile -->
<ul class="sidenav" id="mobile">
    <li class="right"><a class="sidenav-close"><i class="material-icons">close</i></a></li>
    <li><a href="{{ route('index') }}">BIKE TEST GRYON</a></li>
    <li><a href="{{ route('client.create') }}">AJOUTER UN CLIENT</a></li>
    <li><a href="{{ route('client.index') }}">LISTE DE CLIENTS</a></li>
    @user
    <li><a href="{{route('compte.deconnect')}}" class="btn-small">SE DÉCONNECTER</a></li>
    @else
    <li><a href="{{ route('compte.login') }}" class="btn-small">SE CONNECTER</a></li>
    @enduser
</ul>
<!-- menu on browser -->
<nav>
    <div class="nav-wrapper container">
        <a href="#" data-target="mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
        <a href="{{ route('index') }}" class="brand-logo left"><img src="/synoviale/img/logoBlanc.png" alt="Bike Test Gryon" width="80%"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{ route('client.create') }}">AJOUTER UN CLIENT</a></li>
            <li><a href="{{ route('client.index') }}">LISTE DE CLIENTS</a></li>
            @user
            <li><a href="{{route('compte.deconnect')}}" class="btn-small">SE DÉCONNECTER</a></li>
            @else
            <li><a href="{{ route('compte.login') }}" class="btn-small">SE CONNECTER</a></li>
            @enduser
        </ul>
    </div>
</nav>

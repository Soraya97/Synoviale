
<!-- menu on mobile -->
<ul class="sidenav" id="mobile">
    <li class="right"><a class="sidenav-close"><i class="material-icons">close</i></a></li>
    <li><a href="{{route('index')}}">BIKE TEST GRYON</a></li>
    <li><a href="#!">PRODUITS</a></li>
    <li><a href="{{ route('test.index') }}">TESTS</a></li>
    <li><a href="#!">LISTE DES TESTS</a></li>
    @user
    <li><a href="{{route('compte.deconnect')}}" class="btn-small">SE DÉCONNECTER</a></li>
    @else
    <li><a href="{{route('compte.create')}}" class="btn-small">SE CONNECTER</a></li>
    @enduser
</ul>
<!-- menu on browser -->
<nav>
    <div class="nav-wrapper container">
        <a href="#" data-target="mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
        <a href="{{route('index')}}" class="brand-logo left"><img src="img/logoBlanc.png" alt="Bike Test Gryon"></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#!">PRODUITS</a></li>
            <li><a href="{{ route('test.index') }}">TESTS</a></li>
            <li><a href="#!">LISTE DES TESTS</a></li>
            @user
            <li><a href="{{route('compte.deconnect')}}" class="btn-small">SE DÉCONNECTER</a></li>
            @else
            <li><a href="{{route('compte.create')}}" class="btn-small">SE CONNECTER</a></li>
            @enduser
        </ul>
    </div>
</nav>

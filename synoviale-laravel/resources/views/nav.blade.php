<!-- submenu of the useful informations -->
<ul id="submenuInfo" class="dropdown-content">
    <li><a href="#!">GÉNÉRALITÉS</a></li>
    <li><a href="#!">PARCOURS</a></li>
    <li><a href="#!">TARIFS/HORAIRE</a></li>
    <li><a href="#!">ACCÈS/PLAN</a></li>
    <li><a href="#!">LOGEMENTS</a></li>
    <li><a href="#!">CONTACT</a></li>
</ul>
<!-- submenu of the useful informations for mobile -->
<ul id="submenuInfoMob" class="dropdown-content">
    <li><a href="#!">GÉNÉRALITÉS</a></li>
    <li><a href="#!">PARCOURS</a></li>
    <li><a href="#!">TARIFS/HORAIRE</a></li>
    <li><a href="#!">ACCÈS/PLAN</a></li>
    <li><a href="#!">LOGEMENTS</a></li>
    <li><a href="#!">CONTACT</a></li>
</ul>
<!-- submenu of the account -->
<ul id="submenuAccount" class="dropdown-content">
    @client
    <li><a href="#!">MES TESTS</a></li>
    <li><a href="{{route('velo.index')}}">TROUVER UN VÉLO</a></li>
    @endclient
    @user
    <li><a href="{{route('user.show',Session::get('user.id'))}}">MES PARAMÈTRES</a></li>
    @enduser

</ul>
<!-- submenu of the account for mobile -->
<ul id="submenuAccountMob" class="dropdown-content">
    @client
    <li><a href="#!">MES TESTS</a></li>
    <li><a href="{{route('velo.index')}}">TROUVER UN VÉLO</a></li>
    @endclient
    @user
    <li><a href="{{route('user.show',Session::get('user.id'))}}">MES PARAMÈTRES</a></li>
    @enduser

</ul>
<!-- menu on mobile -->
<ul class="sidenav" id="mobile">
    <li class="right"><a class="sidenav-close"><i class="material-icons">close</i></a></li>
    <li><a href="{{route('index')}}">BIKE TEST GRYON</a></li>
    @client
    <li><a href="{{route('pass.show',Session::get('client.id'))}}">MON PASS</a></li>
    @endclient
    @user
    <li><a class="dropdown-triggerAccount" href="#!" data-target="submenuAccountMob">MON COMPTE<i class="material-icons right">arrow_drop_down</i></a></li>
    @enduser
    <li><a class="dropdown-trigger" href="#!" data-target="submenuInfoMob">INFOS PRATIQUES<i class="material-icons right">arrow_drop_down</i></a></li>
    <li><a href="{{ route('produit.index') }}">MODÈLES DE VÉLOS</a></li>
    <li><a href="#!">NEWS</a></li>
    <div class="row">
      <li class="col s6 underline"><a href="#!">FR</a></li>
      <li class="col s6"><a href="#!">DE</a></li>
    </div>
    @user
    <li> <a class="btn" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a> </li>
    @else
    <li> <a class="btn" href="{{ route('compte.login') }}">RÉSERVER SON PASS</a> </li>
    @enduser
    <br>
    @user
    <li><a href="{{ route('compte.deconnect') }}" class="btn">SE DÉCONNECTER</a></li>
    @else
    <li><a href="{{ route('compte.login') }}" class="btn ">SE CONNECTER</a></li>
    @enduser
</ul>
<!-- menu on browser -->
<nav>
    <div class="nav-wrapper container navBar">
        <a href="#" data-target="mobile" class="sidenav-trigger right"><i class="material-icons">menu</i></a>

        <a href="{{route('index')}}" class="brand-logo left"><img src="/img/logo_blanc.svg" alt="Logo du Bike Test Gryon" width="auto" height="38px"></a>

        <ul class="right hide-on-med-and-down menu">
            @client
            <li><a href="{{route('pass.show',Session::get('client.id'))}}">MON PASS</a></li>
            @endclient
            @user
            <li><a class="dropdown-triggerAccount" href="!#" data-target="submenuAccount">MON COMPTE<i class="material-icons right">arrow_drop_down</i></a></li>
            @enduser
            <li><a class="dropdown-trigger" href="#!" data-target="submenuInfo">INFOS PRATIQUES<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="{{route('produit.index')}}">MODÈLES DE VÉLOS</a></li>
            <li><a href="#!">NEWS</a></li>
            <li class="left underline"><a href="#!">FR</a></li>
            <li class="center-align"><a href="#!">DE</a></li>
            @user
            <li> <a class="btn" href="{{ route('pass.create') }}">RÉSERVER SON PASS</a> </li>
            @else
            <li> <a class="btn" href="{{ route('compte.login') }}">RÉSERVER SON PASS</a> </li>
            @enduser

            @user
            <li><a href="{{ route('compte.deconnect') }}" class="btn">SE DÉCONNECTER</a></li>
            @else
            <li><a href="{{ route('compte.login') }}" class="btn ">SE CONNECTER</a></li>
            @enduser

        </ul>
    </div>
</nav>

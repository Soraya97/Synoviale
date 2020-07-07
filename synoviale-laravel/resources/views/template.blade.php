<!doctype html>
<html lang='fr'>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" , initial-scale="1">
        <title>Bike Test Gryon</title>
        <link type="text/css" rel="stylesheet" href="/css/app.css" media="screen,projection" />
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <link rel="shortcut icon" type="image/jpeg" href="img/favicon-32x32.png">
        <style></style>
    </head>

    <body>
        <div id="wrapper">
            <header class="header">
                <div class="container">
                    @yield('header')
                </div>
            </header>

            @yield('nav')

            <main>
                @yield('contenu')
            </main>

            <footer>
                @yield('footer')
            </footer>
        </div>

        <!--Import jQuery before materialize.js-->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="/js/materialize.min.js"></script>
        <script type="text/javascript" src="/js/test.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="/js/app.js"></script>

    </body>

</html>

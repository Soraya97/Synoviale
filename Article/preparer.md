# préparation du projet

création de projet 

    composer create-project --prefer-dist laravel/laravel

modifier le fichier `app/Providers/AppServiceProvider.php`

    use Illuminate\Support\Facades\Schema;
    
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

## Database

ouvrire **mysql**

    mysql -u root -p

créer une nouvel base de données

    CREATE DATABASES projet;

modifier le ficheir `.env` (dans laravel)

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=projet
    DB_USERNAME=root
    DB_PASSWORD=


## Npm

npm

    npm init

    npm install

## jquery

nous utilisons un CDN de jQuery (voir vue)

## Materialize

charger [materialize]('https://materializecss.com/getting-started.html') (en sass)

ajouter tous les fichiers dans `resource/sass`

ajouter le fichier *materialize.js* dans `resources/js`

dans le fichier `resources/sass/app.scss`

on doit rajouter le code pour l'utilisation de materialize
    //icone
    @import url("https://fonts.googleapis.com/icon?family=Material+Icons");
    //Materialize
    @import "materialize.scss";

## fichier app.js

dans le fichier est `resource/js/app.js`

ajouter : 
    require('materialize-css');
    
    // init Materialize with jQuery
    $(document).ready(function(){
        //code here function
    });

## vue
pour utiliser les outiles ajouter dans le vue `resources/views/template.blade.php`


pour le css (dans le head) :

    <link herf='css/app.css' rel="stylesheet">

pour le js (avant `</body>`)

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    
    <script src="js/app.js"></script>

## configue webpack.mix.js

laravel à une version Webpack embarqué

dans le fichier `webpack.mix.js` modifier le fichier comme tel :

    mix.js('resources/js/app.js', 'public/js')
        .sass('resources/sass/app.scss', 'public/css/app.css')
        .style('resources/css/app,css', 'public/css/app.css);

## compilation

 pour compiler le *sass* et le *javascripte, il faut lance la commande : 

    npm run dev

pour le mode production la commande est :

    npm run production



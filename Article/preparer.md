# Préparation du projet

Création de projet 

    composer create-project --prefer-dist laravel/laravel

Modifier le fichier `app/Providers/AppServiceProvider.php`

    use Illuminate\Support\Facades\Schema;
    
    public function boot()
    {
        Schema::defaultStringLength(191);
    }

## Database

Ouvrir **mysql**

    mysql -u root -p

Créer une nouvelle base de données

    CREATE DATABASES projet;

Modifier le fichier `.env` (dans Laravel)

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

## jQuery

nous utilisons un CDN de jQuery (voir plus bas).

## Materialize

Télécharger [materialize]('https://materializecss.com/getting-started.html') (en sass), ajouter tous les fichiers dans `resource/sass` et ajouter le fichier *materialize.js* dans `resources/js`.

Dans le fichier `resources/sass/app.scss`, rajouter ce code pour l'utilisation de materialize:

```
//icone
@import url("https://fonts.googleapis.com/icon?family=Material+Icons");
//Materialize
@import "materialize.scss";
```

## Fichier app.js

Dans le fichier qui se trouve dans `resource/js/app.js`, il faut ajouter : 

    require('materialize-css');
    // init Materialize with jQuery
    $(document).ready(function(){
        //code here function
    });

## Vue
Pour utiliser les outils, ajouter dans le vue `resources/views/template.blade.php`


Pour le css (dans le head) :

    <link herf='css/app.css' rel="stylesheet">

Pour le fichier JavaScript (avant `</body>`)

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    
    <script src="js/app.js"></script>

## Configuration de webpack.mix.js

Laravel à une version Webpack embarqué

Dans le fichier `webpack.mix.js` modifier le fichier comme tel :

    mix.js('resources/js/app.js', 'public/js')
        .sass('resources/sass/app.scss', 'public/css/app.css')
        .style('resources/css/app.css', 'public/css/app.css);

## Compilation

 Pour compiler le *sass* et le JavaScript, il faut lancer la commande : 

    npm run dev

Pour le mode production la commande est :

    npm run production



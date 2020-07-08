# Authentification

Nous allons créer un système d'authentification plus léger que celui proposé par Lararvel et plus spécifique par rapport à nos besoins.

Quand un *User* (utilisateur du site) se connecte: son compte est relié à une *Person* (utilisateur du Bike Test) celui-ci peut être : un *Client*, un membre du *staff*, un *Contact* d'une entreprise ou l'*Organisateur* (*Profile*).

Voici le schéma relationnel:

> insérer image ici

Pour un compte utilisateur nous avons besoins

* que l'utilisateur reste connecté, nous utiliserons les sessions
* que des parties du site soient visibles que par certains types d'utilisateur (*client*,*contact* et etc...), pour cela nous utiliserons des directives *Blade* personalisées
* protéger les routes, à l'aide de *Middleware*
* de créer un compte, se connecter, etc, grâce à un controleur *UserController*
* et enfin de lier directement l'*User* à *Person*, que nous ferons dans le contrôleur *UserController*


# Création des fichiers pour les profils

Pour chaque profil nous créons une Migration, un Seeder, un Model et un Controleur avec la commande:

    php artisan make:model *name* -crms

> Ce n'est pas sûre que nous utilisons le contrôleur mais, il nous est préférable de le créer maintenant et éventuellement le supprimer après.

Il nous faut 4 *Profile*:

* **Organizer**
* **Client** (existe déja)
* **Contact** (existe déja)
* **Employee** (pour différencier de **Staff**)

> Comme il y a déjà des fichiers pour la table **User** nous allons créer ce que nous auvons besoin au fur et à mesure.

## Migration

Nous modifions la table de migration de **User** `2014_10_12_000000_create_users_table.php` dans `dans database/migrations`

Nous ajoutons la ligne `$table->foreignId('person_id');`

Comme la table sera liée à *Person*, nous risquons d'avoir un conflit avec l'attribut `name`, ainsi nous le modifions en `username`

    class CreateUsersTable extends Migration
    {
        public function up()
        {
            Schema::create('users', function (Blueprint $table) {
                $table->id();
                $table->string('username');
                $table->string('email')->unique();
                $table->foreignId('person_id');
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password');
                $table->rememberToken();
                $table->timestamps();
            });
        }
    }
Pour chaque table de migration de chaque *profile* utilisateur (exemple avec **Organizer**)
nous ajoutons la clé étrangère de **Person**

    $table->foreignId('person_id');

Cela donne:

    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->timestamps();
        });
    }

> dans la table migration *people* nous modifions l'email1 en email car c'est le même que celui de *users*

 $table->string('email')->nullable();

## Seeder

> À ajouter les tables de Profil et la table Person

Nous créons un seeder

    php artisan make:seeder UserSeeder

Nous créons un **User** pour chaque **Person**

    public function run()
    {
        DB::table('users')->delete();
    
        DB::table('users')->insert([
            [
            'username' => 'thomas',
            'email' => 'example1@test.com',
            'password' => '1234',
            'person_id' => 1,
            ],
            [
            'username' => 'leandra',
            'email' => 'example2@test.com',
            'password' => '1234',
            'person_id' => 2,
            ],
            [
            'username' => 'maxime',
            'email' => 'example3@test.com',
            'password' => '1234',
            'person_id' => 3,
            ],
            [
            'username' => 'lola',
            'email' => 'example4@test.com',
            'password' => '1234',
            'person_id' => 4,
            ],
        ]);
    }

## Model

Il n'y a pas de modification dans le modèle **Person**

Le modèle **User** existe dèja, nous allons juste ajouter `person_id` dans *$fillable*

    protected $fillable = [
        'name', 'email', 'password','person_id',
    ];

Nous rajoutons une relation avec la table **Person**

     public function person()
    {
        return $this->belongsTo(Person::class);
    }


Pour les tables *profile*, nous rajoutons la même chose:

    class Organizer extends Model
    {
    
        use SoftDeletes;
    
        protected $fillable = [
            'person_id'
        ];
    
        public function person()
        {
            return $this->belongsTo(Person::class);
        }
    }

## Contrôleur

Les contrôleurs *Profile* sont des contrôleurs resource normale

### Contrôleur UserController

Nous allons créer un contrôleur **UserController** qui va gérer:

* la connexion d'un utilisateur - **connect**
* la déconnexion - **deconnect**
* la création d'un nouveau compte - **create**

Pour qu'un utilisateur soit connecté nous utiliserons les sessions

Création du nouveau contrôleur:

    php artisan make:controller UserController --model=User

> --model=User lie directement le contrôleur au model
> S'il crée un fichier ressource, vous pouvez effacer tous les modèles

Le fichier est dans `app/Http/Controllers`

Nous devons ajouter les *Use* 1 pour les sessions et ceux de tous les modèles des tables *Profile* + plus *Person*

    namespace App\Http\Controllers;
    
    use App\User;
    use App\Organizer;
    use App\Client;
    use App\Employee;
    use App\Contact;
    use App\Person;
    
    use Illuminate\Http\Request;
    
    use Illuminate\Http\Facades\Session;

#### Méthode connect

Nous créons une première méthode `connect()` pour la connexion d'un utilisateur déjà existant

    public function connect(Request $request)
    {
    
        $data =  $request->validate([
            "name" => "required",
            "password" => "required"
        ]);
    
        $user = User::where($data)->first();
    
        if($user)
        {  
            $request->session()->put('user',$user);
    
          $organizer = Organizer::where('person_id',$user->person->id)->first();
    
          $client = Client::where('person_id',$user->person->id)->first();
    
          $employee = Employee::where('person_id',$user->person->id)->first();
    
          $contact = Contact::where('person_id',$user->person->id)->first();
    
          $request->session()->put('client',$client);
    
          $request->session()->put('staff',$staff);
    
          return redirect()->back();
      }
      else
      {
          return redirect()->back();
      }
    
    }


Explication:

Nous validons les données entrantes

        $data =  $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

Nous récupérons l'utilisateur

    $user = User::where($data)->first();

> first permet d'avoir un tableau, et pas un tableau dans un tableau

 Si l'utilisateur existe nous lançons le traitement:
        if($user)
        { 
            //traitement
        }
Si l'utilisateur n'existe pas, nous le renvoyons à la page courante
        else
        {
            return redirect()->back();
        }

**Traitement** (si l'utilisateur existe)

Nous rajoutons les informations de l'utilisateur dans la Session *user*

    $request->session()->put('user',$user);

Nous récuperons en même temps la table *Person* à travers *User*

Ensuite, nous regardons si la *Person* existe dans les tables *Profile*

    $organizer = Organizer::where('person_id',$user->person->id)->first();

Et nous le rajoutons dans une session, s'il n'existe pas, il sera null

    $request->session()->put('organizer',$organizer);

> même s'ils sont *null*, c'est important de les créer, car ils vont être utile pour les directives Blade

Nous retournons à la page courante

    return redirect()->back();

> un middleware va l'empécher d'aller dans la page *login*

#### Méthode disconnect

Pour déconnecter un utilisateur on va simplement vider la Session avec la méthode `Session::flush()`

    public function deconnect()
    {
        Session::flush();
    
        return redirect('/');
    }

Dans le frontend, nous aurons simplement un lien

    <a href="{{route('deconnect')}}">disconnect</a>

#### Méthode create

**create** est la méhtode pour qu'un utilisateur crée un compte

    public function create(Request $request)
    {
        
        $data = $request->validate([
            'username' => 'required',
            'email' => 'required'|email,
            'password' => 'required',
            'name' => 'required',
            'firstname' => 'required',
        ]);
    
        $personTest = $request->only('name','firstname','email');
    
        $userTest = $request->only('username','email');
    
        if(Person::where($person)->first())
        {
            return redirect('/');
        }
    
        if(User::wher($userTest)->first())
        {
            return redirect('/');
        }
    
        $person = $request->only('name','firstname','email','email2','phoneNumber1','phoneNumber','comment');
    
        Person::create($person);
    
        $personId = Person::where($person)->first();
    
        $request->request->add(['person_id' => $personId->id]);
    
        $user = $request->only('name','email','password','person_id');
    
        $client = $request->only('person_id');
    
        User::create($user);
    
        Client::create($client);
    
        // ajouter code de connexion
    
    }

> un utilisateur ne peut créer seulement qu'un seul compte Client

## Route

    Route::post('user','UserController@connect')->name('connect');
    Route::get('user','UserController@deconnect')->name('deconnect');
    Route::post('register','UserController@create')->name('create');

## Middleware

Pour protéger nos routes nous allons créer des middlewares:

* **Guest** pour l'utilisateur pas connecté
* **CheckUser** pour l'utilisateur connecté
* **CheckClient** pour l'utilisateur client
* **CheckOrganizer** pour l'utilisateur organisateur
* **CheckEmployee** pour l'utilisateur employer
* **CheckContact** pour l'utilisateur entreprise

Donc **Guest** et **User** sont pour les routes plus générales (utilisateur connecté ou non) alors que les autres agissent selon le *Profile* de l'utilisateur

Pour créer un middleware, nous utilisons la commande

    php artisan make:middleware *name*

Exemple code : dans `app/Http/Middleware/CheckClient.php`

    public function handle($request, Closure $next)
    {
        if(!Session::has('client') || !Session::has('organizer'))
        {
            return redirect('/');
        }
        return $next($request);
    }

Modifier `app/Http/Kernel.php`

dans `protected $routeMiddleware = []`

Ajouter:

    'guest' => \App\Http\Middleware\Guest::class,
    'checkclient' => \App\Http\Middleware\CheckClient::class,
    'checkcontact' => \App\Http\Middleware\CheckContact::class,
    'checkemployee' => \App\Http\Middleware\CheckEmployee::class,
    'checkorganizer' => \App\Http\Middleware\CheckOrganizer::class,
    'checkuser' => \App\Http\Middleware\CheckUser::class,

#### Utilisation de middleware

Dans une route:

    Route::view('login','login')->name('login')->middleware('guest');

Dans un contrôleur, par exemple `app/Http/Controllers/PersonController`

    public function __construct()
    {
        $this->middleware('checkuser');
    }

> Nous passons par le premier middleware, puis au suivant, etc..

## Directives *Blade*

6 directives blade contidionnelles que nous codons dans `app/Provider/AppServiceProvider.php`

pour tous les utilisateurs connectés

    Blade::if('user', function () {
        return Session::get('user');
    });

pour tous les utilisateurs **pas** connecté

    Blade::if('guest', function () {
        return !Session::get('user');
    });

pour les différents *Profile*

    Blade::if('organizer', function () {
        return Session::get('organizer');
    });
    
    Blade::if('client', function () {
        return Session::get('client');
    });
    
    Blade::if('employee', function () {
        return Session::get('employee');
    });
    
    Blade::if('contact', function () {
        return Session::get('contact');
    });


cela donne dans un page *Blade*

    @user
        //visible seulement par les utilisateurs connecté
    @enduser
    
    @guest
        //visible par les utilisateurs pas connecté
    @endguest

les profils:

    @organizer
    
    @endorganizer
    
    @client
    
    @endclient
    
    @store
    
    @endstore
    
    @employee
    
    @endemployee
    
    @contact
    
    @endcontact


## Exemple view

Avec les directives blade 

    @user 
    
        <p>je suis connecté</p>
    
    @enduser
    
    @employee 
    
        <p>Je suis du staff</p>
    
    @endemployee
    
    @client
    
        <p>je suis un client</p>
    
    @endclient

directives + route de connexion et déconnexion

    @user
        <a href="{{route('deconnect')}}">disconnect</a>
     @else
        <form action="{{ route('connect') }}" method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <label for="password">password</label>
        <input type="text" name="password">
            <button type="submit">Connect</button>
        </form>
    
        <a href="{{route('register')}}">Register</a>
    @enduser

utilisation de session

    <h1>Hello !!!</h1>
    
    <strong>{{Session::get('user.person.firstname')}}</strong>
    
    <strong>{{Session::get('user.person.name')}}</strong>
    
    <p><em>{{Session::get('user.person.comment')}}</em></p>
    
    <a href="{{route('deconnect')}}">disconnect</a>

> nous avons accès à *User* qui contient *Person*
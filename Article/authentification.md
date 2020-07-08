# Authentification

nous allons créer une système d'authentification plus léger que celle proposer par Lararvel et plus spécifique à nos besoins.

quand un *User* (utilisateur du site) se connect, sont compte est relié à une *Person* (utilisateur du Bike Test) celui ci peut être : un *Client*, un memebre du *staff*, un *Contact* d'une entreprise ou l'*Organisateur* (*Profile*).

voici le schema relationnel:

> insérer image ici

pour un compte utilisateur nous avons besoins

* que l'utilisateur reste connecté, on utilisera les sessions
* que des parties du site soin visible que par des type d'utilisateur (*client*,*Contact* et etc...), nous utiliserons des directive *Blade* personalisé
* protéger les routes, à l'aide de *Middleware*
* de créer un compte, se connecter etc.., grace à un controleur *UserController*
* et enfin de liée directement l'*User* à *Person*, qu'on fera dans le controleur *UserController*


# création des fichiers pour les profils

pour chaque profil nous créons un Migration, un Seeder, un Model et un Controleur avec la commande:

    php artisan make:model *name* -crms

> ce n'est pas sur que nous utilisons le controleur mais mieux vos créer maintenent et le supprimer après

il nous faut 4 Profile:

* **Organizer**
* **Client** (existe déja)
* **Contact** (existe déja)
* **Employee** (pour différencier de **Staff**)

> comme il y a dèja des fichiers pour la table **User** on va créer se qu'on aura besoin fur à mesure

## migration

on modifie la table de migration de **User** `2014_10_12_000000_create_users_table.php` dans `dans database/migrations`

on ajoute la ligne `$table->foreignId('person_id');`

comme la table sera liée à *Person* on risque d'avoir un conflie avec l'attribut `name` on le modifie en `username`

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
pour chaque table de migration de chaque *profile* utilisateur (exemple avec **Organizer**)
nous ajouton le clé étrangére de **Person**

    $table->foreignId('person_id');

cela donne:

    public function up()
    {
        Schema::create('organizers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->timestamps();
        });
    }

> dans la migration *people* nous modifions le email1 en email car c'est le même que celui de *users*

 $table->string('email')->nullable();

## seeder

> à ajouter les table de Profil et la table Person

nous créons un seeder

    php artisan make:seeder UserSeeder

on créer un **User** pour chaque **Person**

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

il y a pas de modification dans le model **Person**

le model **User** existe dèja, nous allons juste ajouter `person_id` dans *$fillable*

    protected $fillable = [
        'name', 'email', 'password','person_id',
    ];

on rajoute une relation avec la table **Person**

     public function person()
    {
        return $this->belongsTo(Person::class);
    }


pour les tables *profile* on rajoute la même chose:

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

## controleur

Les controleurs *Profile* sont des controleurs resource normale

### controleur UserController

nous allons créer un controleur **UserController** qui va gérer:

* la connection d'un utilisateur - **connect**
* la déconnection - **deconnect**
* la création d'un nouveau compte - **create**

pour qu'un utilisateur sois connecté nous utiliserons les sessions

création du nouveau controleur:

    php artisan make:controller UserController --model=User

> --model=User lie directement le controleur au model
> si il créer un fichier ressource, vous pouvez effacer tout les models

le fichier est dans `app/Http/Controllers`

nous devons ajoute les *Use* 1 pour les sessions et ceux de tous les models des tables *Profile* + plus *Person*

    namespace App\Http\Controllers;
    
    use App\User;
    use App\Organizer;
    use App\Client;
    use App\Employee;
    use App\Contact;
    use App\Person;
    
    use Illuminate\Http\Request;
    
    use Illuminate\Http\Facades\Session;

#### méthode connect

nous créons un première méthode `connect()` pour la connexion d'un utilisateur dèja existant

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


explication:

on valide les données entrantes

        $data =  $request->validate([
            "username" => "required",
            "password" => "required"
        ]);

on récupéré l'utilisateur

    $user = User::where($data)->first();

> first permer d'avoir un tableau, et pas un tableau dans un tableau

 si l'utilisateur existe on lance le traitement:
        if($user)
        { 
            //traitement
        }
si l'utilisateur n'existe pas, en renvois à la page courant
        else
        {
            return redirect()->back();
        }

**Traitement** (si l'utilisateur existe)

on rajoute les informations de l'utilisateur dans la Session *user*

    $request->session()->put('user',$user);

on récuper en même temps la table *Person* à travers *User*

en suite, on regarde si la *Person* existe dans les tables *Profile*

    $organizer = Organizer::where('person_id',$user->person->id)->first();

et on le rajoute dans une session, si il n'existe pas, il sera null

    $request->session()->put('organizer',$organizer);

> même si il sont *null* c'est importent de les créer, il vont être utile pour les directive Blade

on retourne à la page courente

    return redirect()->back();

> un middleware va l'empécher d'aller dans la page *login*

#### méthode disconnect

pour deconnecter un utilisateur on va semplement vite la Session avec la mhétode `Session::flush()`

    public function deconnect()
    {
        Session::flush();
    
        return redirect('/');
    }

dans le frontend on ora simplement un lien

    <a href="{{route('deconnect')}}">disconnect</a>

#### méthode create

**create** est la méhtode pour qu'un utilisateur créer un compte

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

> un utilisateur ne peut créer seulement un compte Client

## route

    Route::post('user','UserController@connect')->name('connect');
    Route::get('user','UserController@deconnect')->name('deconnect');
    Route::post('register','UserController@create')->name('create');

## Middleware

pour protéger nos route nous allons créer des middlewares:

* **Guest** pour l'utilisateur pas connecté
* **CheckUser** pour l'utilisateur connecté
* **CheckClient** pour l'utilisateur client
* **CheckOrganizer** pour l'utilisateur organisateur
* **CheckEmployee** pour l'utilisateur employer
* **CheckContact** pour l'utilisateur entreprise

donc **Guest** et **User** sont pour les route plus générale (utilisateur connecté ou non) alors que les autres agise selon le *Profile* de l'utilisateur

pour créer un middleware nous utilisons la commande

    php artisan make:middleware *name*

exemple code : dans `app/Http/Middleware/CheckClient.php`

    public function handle($request, Closure $next)
    {
        if(!Session::has('client') || !Session::has('organizer'))
        {
            return redirect('/');
        }
        return $next($request);
    }

modifier `app/Http/Kernel.php`

dans `protected $routeMiddleware = []`

ajouter:

    'guest' => \App\Http\Middleware\Guest::class,
    'checkclient' => \App\Http\Middleware\CheckClient::class,
    'checkcontact' => \App\Http\Middleware\CheckContact::class,
    'checkemployee' => \App\Http\Middleware\CheckEmployee::class,
    'checkorganizer' => \App\Http\Middleware\CheckOrganizer::class,
    'checkuser' => \App\Http\Middleware\CheckUser::class,

#### utilisation de middleware

dans une route:

    Route::view('login','login')->name('login')->middleware('guest');

dans un controleur, exemple `app/Http/Controllers/PersonController`

    public function __construct()
    {
        $this->middleware('checkuser');
    }

> On passe par le premier middleware, puis au suivent et etc..

## directive *Blade*

6 directive blade contidionnel que l'on code dans `app/Provider/AppServiceProvider.php`

pour tous les utilisateurs connecté

    Blade::if('user', function () {
        return Session::get('user');
    });

pour tous les utilisateurs **pas** connecté

    Blade::if('guest', function () {
        return !Session::get('user');
    });

pour les différent *Profile*

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

les profiles:

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


## exemple view

avec les directives blade 

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

> on a accès *User* qui contient *Person*
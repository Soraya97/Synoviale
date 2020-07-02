# Marche à suivre pour le développement du Backend

Pour chaque [table](tables.md) il faut créer :

* un fichier de migration
* un fichier de population
* un Model
* un contrôleur en mode ressource (avec index,update etc..)

un autre fichier va traité des contrôleurs spécifiques pour chaque page, mais nous allons créer ici les contrôleurs ressources de chaque tables et effacé ceux qui ne serons pas utilisé.

pour être sûre que les fichiers correspondent entre migration,model, contrôleur et seeder; nous utiliserons une seule commande qui fera le travaille pour nous:

    php artisan make:model *Name* -crms

* **-c** créer un contrôleur **-r** précise que c'est une ressource
* **-m** créer une table de migration
* **-s** créer un seeder

## Exemple avec la table Product

exemple du code avec la table **Product**

### Table Product
|Product||
|-|-|
|id||
|number (integer)|unique|
|shortDescr (string)||
|longDescr (string)|nullable|
|distinctiveSign (string)|nullable|
|lienWeb (string)|nullable|
|brand_id|brand - belongsTo|
||test - hasMany|
||bike - belongsTo|

### Migration

Le fichier `2020_06_18_122401_create_products_table.php` dans `database/migrations`

    class CreateProductSTable extends Migration
    {
        public function up()
        {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->integer('number')->unique();
                $table->string('shortDescr');
                $table->string('longDescr')->nullable();
                $table->string('distinctiveSign')->nullable();
                $table->string('lienWeb')->nullable();
                $table->foreignId('brand_id');
                $table->timestamps();
            });
        }
    
        public function down()
        {
            Schema::dropIfExists('products');
        }
    }


### Seeder

Modifier le fichier `database/seeds/productSeeder.php`

    class ProductSeeder extends Seeder
    {
        public function run()
        {
            DB::table('products')->delete();
    
            DB::table('products')->insert([
                ['number' => 1,
                'shortDescr' => '2020',
                'longDescr' => 'SuperVelo',
                'distinctiveSign' => 'vert',
                'lienWeb' => 'htpps://example.com',
                'brand_id' => 1],
                ['number' => 2,
                'shortDescr' => '2020',
                'longDescr' => 'Velo2049',
                'distinctiveSign' => 'bleu/rose',
                'lienWeb' => 'htpps://example.com',
                'brand_id' => 2]
    		]);
        }
    }

Il faut un appel dans le fichier `database/seeds/DatabaseSeeder.php`

    class DatabaseSeeder extends Seeder
    {
        public function run()
        {
            $this->call(ProductSeeder::class);
        }
    }


### Model

Le fichier `Product.php` dans `app/`

Nous ajoutons le SoftDeletes avec `use SoftDeletes`

    class Product extends Model
    {
    
        use SoftDeletes;
    
        protected $fillable = [
            'number',
            'shortDescr',
            'longDescr',
            'distinctiveSign',
            'lienWeb',
            'brand_id'
            ];
    
        public function brand()
        {
            return $this->belongsTo(Brand::class); //lien de 1 - N (un produit à une seul marque)
        }
    
        public function test()
        {
            return $this->hasMany(Test::class); // lien N 1 (plusieur produit pour plusieur tests)
        }
    
        public function bike()
        {
            return $this->belongsTo(Bike::class);
        } 
    }

### Controller

Modifier le fichier: `app/Http/Controller/ProductController.php`


    public function index()
    {
        $products = Product::all();
    
        return view('product', compact('products'));
    }
    
    public function create()
    {
        return view ('addproduct');
    }
    
    public function store(Request $request)
    {
    
        $data = $request->validated([
            'number' => 'required',
            'shortDescr' => 'required',
            'brand_id' => 'required',
            ]);
    
        Product::create($data); 
    
        return redirect('product');
    
    }
>  contrôler la méthode validated
> on peut aussi utiliser un request

    public function show(Product $product)
    {
        return view('onlyproduct',compact('product'));
    }
    
    public function edit(Product $product)
    {
        //
    }
    
    public function update(Request $request, Product $product)
    {
        $data = $request->only([
            'number',
            'shortDescr',
            'longDescr',
            'distinctiveSign',
            'lienWeb',
            'brand_id'
        ]);
    
        $product->update($data);
    
        return redirect('product');
    
    }
    
    public function destroy(Product $product)
    {
        $product->delete();
    
       return redirect('product');
    }


### Request
Nous pouvons utiliser aussi un *Request* pour valider les données

    php artisan make:request ProductRequest

Cela crée un fichier dans `app/Http/Requests/`

L' on met *authorize* à **true** et on ajoute les règles dans *rules*

    class ProductRequest extends FormRequest
    {
        public function authorize()
        {
            return true;
        }
    
        public function rules()
        {
            return [
                'number' => 'required',
                'shortDescr' => 'required',
                'brand_id' => 'required'
            ];
        }
    }

On doit ensuite modifier le contrôleur

On ajoute en haut du fichier

    use App\Http\Requests\ProductRequest;

 et dans les méthodes

    public function store(ProductRequest $request)
    {
    
        $data = $request->validated();
    
        Product::create($data); 
    
        return redirect('product');
    
    }

### Route

Créer la route dans `routes/web.php`

    Route::resource('Product', 'ProductController');


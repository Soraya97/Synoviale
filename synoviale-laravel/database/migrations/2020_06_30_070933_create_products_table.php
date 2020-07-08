<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *Table product permettant aux entreprises de rentrer les produits qu'ils désirent exposer
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('shortDescr');
            $table->string('longDescr')->nullable();
            $table->string('distinctiveSign')->nullable();
            $table->string('lienWeb')->nullable();
            $table->foreignId('brand_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

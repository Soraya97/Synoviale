<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditionProductTable extends Migration
{
    /**
     * Run the migrations.
     *Table pivot indispensable pour l'attribution d'un produit à une édition
     * @return void
     */
    public function up()
    {
        Schema::create('edition_product', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id');       
            $table->foreignId('edition_id');      
            $table->foreignId('product_id');       
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
        Schema::table('edition_product', function(Blueprint $table) {
            $table->dropForeign(['edition_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('edition_product');
    }
}

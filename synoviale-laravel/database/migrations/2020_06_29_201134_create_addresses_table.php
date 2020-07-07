<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration {

    /**
     * Run the migrations.
     *Table Adresses permettant d'attribuer une adresse à une personne
     * @return void
     */
    public function up() {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('street1');
            $table->string('street2')->nullable();
            $table->integer('streetNumber')->nullable();
            $table->string('POBox')->nullable();
            $table->foreignId('city_id');
            $table->foreignId('person_id');
            $table->foreignId('addresstype_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('addresses');
    }

}

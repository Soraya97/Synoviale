<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('number')->unique();
            $table->string('street1');
            $table->string('street2')->nullable();
            $table->integer('streetNumber')->nullable();
            $table->string('POBox')->nullable();
            $table->foreignId('city_id')
                    ->references('id')
                    ->on('cities')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->foreignId('person_id')
                    ->references('id')
                    ->on('people')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');
            $table->foreignId('addressType_id')
                    ->references('id')
                    ->on('address_types')
                    ->onDelete('restrict')
                    ->onUpdate('restrict');

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

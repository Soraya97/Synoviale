<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddresstypesTable extends Migration
{
    /**
     * Run the migrations.
     *Table addresstypes indispensable pour toutes personnes pssédant une addresse
     * @return void
     */
    public function up()
    {
        Schema::create('addresstypes', function (Blueprint $table) {
            $table->id();
            $table->string('description')->unique();    
            $table->foreignId('company_id');
            $table->foreignId('address_id');
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
        Schema::dropIfExists('addresstypes');
    }
}

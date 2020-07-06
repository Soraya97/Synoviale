<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandEditionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('brand_edition', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id');
            $table->foreignId('edition_id');
            $table->foreignId('brand_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('brand_edition', function(Blueprint $table) {
            $table->dropForeign(['brand_id']);
            $table->dropForeign(['edition_id']);
            
        });
        Schema::dropIfExists('brand_edition');
    }

}

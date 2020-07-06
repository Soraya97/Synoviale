<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobPersonTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('job_person', function (Blueprint $table) {
            $table->id();
            $table->foreignId('person_id');
            $table->foreignId('job_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('job_person', function(Blueprint $table) {
            $table->dropForeign(['job_id']);
            $table->dropForeign(['person_id']);
        });
        Schema::dropIfExists('job_person');
    }

}

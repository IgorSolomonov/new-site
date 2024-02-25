<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('homes', function (Blueprint $table) {
        Schema::create('persons', function ($table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('tel');
            $table->integer('path');
            $table->integer('pin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}

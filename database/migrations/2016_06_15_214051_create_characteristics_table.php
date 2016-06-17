<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharacteristicsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('characteristics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('character_id');
            $table->foreign('character_id')->references('id')->on('characters');
            $table->string('name');
            $table->text('description');
            $table->integer('value')->default(0);
            $table->integer('bonus')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('characteristics');
    }
}

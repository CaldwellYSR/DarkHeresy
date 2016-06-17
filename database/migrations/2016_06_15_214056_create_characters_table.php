<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCharactersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('characters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('name');
            $table->string('player_name');
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('build')->nullable();
            $table->string('complexion')->nullable();
            $table->string('hair')->nullable();
            $table->string('quirks')->nullable();
            $table->string('superstitions')->nullable();
            $table->string('momentos')->nullable();
            $table->string('allies')->nullable();
            $table->string('enemies')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('characters');
    }
}

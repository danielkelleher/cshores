<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Guestbooks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('guestbooks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('poster_name');
            $table->string('properties_id');
            $table->string('rooms_id');
            $table->string('content');
            $table->string('photo_dir');
            $table->string('photo_file_nm');
            $table->string('stars');
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
         Schema::dropIfExists('guestbooks');
    }
}

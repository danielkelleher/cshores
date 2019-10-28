<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Gallery extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('gallery_name');
            $table->string('gallery_pretty_name')->unique();
            $table->string('properties_id');
            $table->string('rooms_id');
            $table->string('photo_dir');
            $table->string('photo_file_nm');
            $table->string('description');
            $table->timestamps();
        });
        DB::unprepared(file_get_contents(base_path('database/migrations/gallery.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('gallery');
    }
}

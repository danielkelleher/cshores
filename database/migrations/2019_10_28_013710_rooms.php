<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('room_name');
            $table->string('room_pretty_name')->unique();
            $table->string('properties_id');
            $table->string('min_cap');
            $table->string('max_cap');
            $table->string('cb_room_id');
            $table->string('description');
            $table->string('default_price');
            $table->timestamps();
        });
        DB::unprepared(file_get_contents(base_path('database/migrations/rooms.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('rooms');    }
}

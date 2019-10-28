<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Properties extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('property_name');
            $table->string('property_pretty_name')->unique();
            $table->string('room_amount');
            $table->string('address');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('phone');
            $table->string('hours');
            $table->string('cloudbeds_api');
            $table->string('cloudbeds_booking_url');
            $table->string('description');
            $table->timestamps();
        });
        DB::unprepared(file_get_contents(base_path('database/migrations/properties.sql')));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('properties');
    }
}

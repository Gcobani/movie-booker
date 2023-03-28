<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cinema_location_id')->unsigned();
            $table->bigInteger('theatre_id')->unsigned();
            $table->bigInteger('film_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->string('token');
            $table->timestamps();
            $table->foreign('cinema_location_id')->references('id')->on('cinema_locations');
            $table->foreign('theatre_id')->references('id')->on('theatres');
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}

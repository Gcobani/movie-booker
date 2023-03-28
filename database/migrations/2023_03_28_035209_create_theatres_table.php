<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheatresTable extends Migration
{
    public function up(): void
    {
        Schema::create('theatres', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cinema_location_id')->unsigned();
            $table->string('name');
            $table->string('type');
            $table->integer('booked_seats')->default(0);
            $table->timestamps();
            $table->foreign('cinema_location_id')->references('id')->on('cinema_locations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theatres');
    }
}

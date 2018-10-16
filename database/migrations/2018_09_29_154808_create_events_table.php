<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('vehicle_id');
            $table->unsignedInteger('status_id');
            $table->unsignedInteger('user_id');
            $table->dateTime('event_from');
            $table->dateTime('event_to')->nullable();
            $table->string('note', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onUpdate('cascade');
            $table->foreign('status_id')->references('id')->on('statuses')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}

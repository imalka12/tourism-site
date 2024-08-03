<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_tours', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('arrival_date');
            $table->time('arrival_time');
            $table->date('departure_date');
            $table->time('departure_time');
            $table->integer('adults_count')->default(1);
            $table->integer('children_count')->default(0);
            $table->string('room_types')->nullable();
            $table->string('holiday_types')->nullable();
            $table->string('accomodation_types')->nullable();
            $table->decimal('total_accomodation_budget', 10, 2)->nullable();
            $table->string('typeOfVehicle')->nullable();
            $table->string('specialInterestedActivities')->nullable();
            $table->string('custname');
            $table->string('email');
            $table->string('phone');
            $table->string('skypename')->nullable();
            $table->string('country');
            $table->text('special_requirements')->nullable();
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
        Schema::dropIfExists('custom_tours');
    }
}

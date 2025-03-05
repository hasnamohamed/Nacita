<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checks', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('branch');
            $table->time('entrance');
            $table->time('exit');
            $table->string('supervisor_name');
            $table->string('customer_name');
            $table->string('phone_no');
            $table->string('vehicle_model_and_type');
            $table->string('manufacturing_year');
            $table->string('vehicle_number');
            $table->string('kilometers');
            $table->integer('chassis_no');
            $table->integer('engine_no');
            $table->string('car_color');
            $table->string('cc_capacity');
            $table->string('transmission');
            $table->string('additional_notes');
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
        Schema::dropIfExists('checks');
    }
};

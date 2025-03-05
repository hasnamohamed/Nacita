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
            $table->string('supervisor_name');
            $table->string('manufacturing_year');
            $table->string('category');
            $table->string('branch');
            $table->string('customer_name');
            $table->string('vehicle_number');
            $table->string('car_color');
            $table->time('entrance');
            $table->string('phone_no');
            $table->string('kilometers');
            $table->string('cc_capacity');
            $table->time('exit');
            $table->string('vehicle_model_and_type');
            $table->integer('chassis_no');
            $table->string('transmission');
            $table->integer('engine_no');
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

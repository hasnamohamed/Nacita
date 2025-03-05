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
        Schema::create('check_informations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('check_id');
            $table->foreign('check_id')
                ->references('id')
                ->on('checks')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('item');
            $table->boolean('fit');
            $table->boolean('unfit');
            $table->string('note');
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
        Schema::dropIfExists('check_informations');
    }
};

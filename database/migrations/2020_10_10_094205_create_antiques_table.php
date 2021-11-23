<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antiques', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name_en');
            $table->string('name_ar');

            $table->longText('desc_en');
            $table->longText('desc_ar');

            $table->unsignedBigInteger('civilization_id');
            $table->foreign('civilization_id')->references('id')->on('civilizations')->onDelete('cascade');

            $table->unsignedBigInteger('museum_id');
            $table->foreign('museum_id')->references('id')->on('museums')->onDelete('cascade');


            $table->string('image_one');
            $table->string('image_two');
            $table->string('image_three');

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
        Schema::dropIfExists('antiques');
    }
}

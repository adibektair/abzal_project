<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpretorExcursionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretor_excursions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('interpretor_id')->unsigned()->index();
            $table->foreign('interpretor_id')->references('id')->on('interpretors');
            $table->bigInteger('excursion_id')->unsigned()->index();
            $table->foreign('excursion_id')->references('id')->on('excursions');
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
        Schema::dropIfExists('interpretor__excursions');
    }
}

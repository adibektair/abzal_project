<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpretorMessengersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretor_messengers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('interpretor_id')->unsigned()->index();
            $table->foreign('interpretor_id')->references('id')->on('messengers');
            $table->bigInteger('messenger_id')->unsigned()->index();
            $table->foreign('messenger_id')->references('id')->on('messengers');
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
        Schema::dropIfExists('interpretor__messengers');
    }
}

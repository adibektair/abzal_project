<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpretorServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretor_services', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('costPerDay');
            $table->double('costPerHour');
            $table->bigInteger('interpretor_id')->unsigned()->index();
            $table->foreign('interpretor_id')->references('id')->on('interpretors');
            $table->bigInteger('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('services');
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
        Schema::dropIfExists('interpretor__services');
    }
}

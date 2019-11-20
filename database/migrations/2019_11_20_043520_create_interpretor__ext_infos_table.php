<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpretorExtInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretor_ext_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('interpretor_id')->unsigned()->index();
            $table->foreign('interpretor_id')->references('id')->on('interpretors');
            $table->bigInteger('extraInfo_id')->unsigned()->index();
            $table->foreign('extraInfo_id')->references('id')->on('extra_infos');
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
        Schema::dropIfExists('interpretor__ext_infos');
    }
}

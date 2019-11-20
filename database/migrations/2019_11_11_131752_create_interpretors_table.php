<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterpretorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interpretors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('photo_path')->nullable();
            $table->string('name');
            $table->string('surname');
            $table->bigInteger('gender_id')->unsigned()->index();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->date('birthday');
            $table->bigInteger('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('site');
            $table->string('phoneNumber');
            $table->text('skype');
            $table->string('aboutMe');
            $table->string('education');
            $table->string('experience');
            $table->string('descriptionOfServices');
            $table->bigInteger('certificate_id')->nullable();
//            $table->foreign('certificate_id')->references('id')->on('certificate_photo');
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
        Schema::dropIfExists('interpretors');
    }
}

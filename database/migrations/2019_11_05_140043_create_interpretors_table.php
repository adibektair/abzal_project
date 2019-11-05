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
            $table->foreign('photo_id')->references('id')->on('user_photos');
            $table->string('name');
            $table->string('surname');
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->date('birthday');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('site');
            $table->string('phoneNumber');
            $table->foreign('messenger_id')->references('id')->on('messengers');
            $table->text('skype');
            $table->string('aboutMe');
            $table->string('education');
            $table->string('extraInfo');
            $table->string('experience');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('descriptionOfServices');
            $table->string('excursions');
            $table->foreign('certificate_id')->references('id')->on('certificate_photo');
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

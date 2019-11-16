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
            $table->bigInteger('photo_id')->unsigned()->index();
            $table->foreign('photo_id')->references('id')->on('user_photos');
            $table->string('name');
            $table->string('surname');
            $table->bigInteger('gender_id')->unsigned()->index();
            $table->foreign('gender_id')->references('id')->on('genders');
            $table->date('birthday');
            $table->bigInteger('city_id')->unsigned()->index();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('site');
            $table->string('phoneNumber');
            $table->bigInteger('messenger_id')->unsigned()->index();
            $table->foreign('messenger_id')->references('id')->on('messengers');
            $table->text('skype');
            $table->string('aboutMe');
            $table->string('education');
            $table->bigInteger('extraInfo_id')->unsigned()->index();
            $table->foreign('extraInfo_id')->references('id')->on('extra_infos');
            $table->string('experience');
            $table->bigInteger('language_id')->unsigned()->index();
            $table->foreign('language_id')->references('id')->on('languages');
            $table->bigInteger('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('services');
            $table->string('descriptionOfServices');
            $table->bigInteger('excursions_id')->unsigned()->index();
            $table->foreign('excursions_id')->references('id')->on('excursions');
            $table->bigInteger('certificate_id')->unsigned()->index();
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

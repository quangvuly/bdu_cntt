<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttSlider', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnttSliderTitle');
            $table->string('cnttSliderIntro');
            $table->text('cnttSliderDetail');
            $table->string('cnttSliderImage');
            $table->string('cnttSliderStatus')->default(1);
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
        Schema::dropIfExists('slider');
    }
}

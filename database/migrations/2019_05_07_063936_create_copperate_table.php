<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCopperateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttcooperate', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnttCooperateName');
            $table->text('cnttCooperateDetail');
            $table->string('cnttCooperateImage');
            $table->string('cnttCooperateFeature')->default(2);
            $table->string('cnttCooperateStatus')->default(1);
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
        Schema::dropIfExists('copperate');
    }
}

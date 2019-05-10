<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunicateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttcomm', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnttCommTitle');
            $table->string('cnttCommIcon');
            $table->string('cnttCommLink');
            $table->string('cnttCommStatus')->default(1);
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
        Schema::dropIfExists('cnttcomm');
    }
}

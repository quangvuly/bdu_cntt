<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttLecturer', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnttLecturerFullName');
            $table->string('cnttLecturerPosition');
            $table->text('cnttLecturerDetail');
            $table->string('cnttLecturerImage');
            $table->string('cnttLecturerStatus')->default(1);
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
        Schema::dropIfExists('lecturer');
    }
}

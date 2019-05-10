<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttContact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnttContactBase');
            $table->string('cnttContactAddress');
            $table->string('cnttContactCity');
            $table->string('cnttContactPhoneNo1');
            $table->string('cnttContactPhoneNo2');
            $table->string('cnttContactEmail')->unique();
            $table->string('cnttContactStatus')->default(1);
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
        Schema::dropIfExists('contact');
    }
}

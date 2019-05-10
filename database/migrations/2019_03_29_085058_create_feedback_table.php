<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttFeedback', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cnttContactGender');
            $table->string('cnttContactFullName');
            $table->string('cnttContactContent');
            $table->string('cnttContactEmail')->unique();
            $table->string('cnttContactStatus')->default(2);
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
        Schema::dropIfExists('feedback');
    }
}

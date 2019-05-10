<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttNews', function (Blueprint $table) {
            $table->increments('cnttNewsID');
            $table->string('cnttNewsTitle');
            $table->string('cnttNewsAuthor');
            $table->text('cnttNewsDesc')->nullable();
            $table->text('cnttNewsDetail');
            $table->string('cnttNewsImage');
            $table->unsignedInteger('cnttNewsCateID');
            $table->foreign('cnttNewsCateID')->references('cnttCateID')->on('cnttCategory')->onDelete('cascade');
            $table->unsignedInteger('cnttNewsUserID');
            $table->foreign('cnttNewsUserID')->references('cnttUserID')->on('cnttUser')->onDelete('cascade');
            $table->string('cnttNewsStatus')->default(1);
            $table->rememberToken();
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
        Schema::dropIfExists('news');
    }
}

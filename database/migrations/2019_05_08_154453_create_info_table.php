<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttinfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnttInfoTitle');
            $table->string('cnttInfoFavicon');
            $table->string('cnttInfoCoverImage');
            $table->string('cnttInfoLogo01');
            $table->string('cnttInfoLogo02');
            $table->string('cnttInfoCopyright');
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
        Schema::dropIfExists('cnttinfo');
    }
}

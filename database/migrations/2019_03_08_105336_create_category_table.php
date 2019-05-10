<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttCategory', function (Blueprint $table) {
            $table->increments('cnttCateID');
            $table->string('cnttCateName');
            $table->string('cnttCateParent')->nullable();
            $table->unsignedInteger('cnttCateUserID');
            $table->foreign('cnttCateUserID')->references('cnttUserID')->on('cnttUser')->onDelete('cascade');
            $table->string('cnttCateSlug');
            $table->string('cnttCateStatus')->default(1);
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
        Schema::dropIfExists('category');
    }
}

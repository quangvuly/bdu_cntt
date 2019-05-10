<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cnttUser', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cnttUserFirstName');
            $table->string('cnttUserLastName');
            $table->string('email')->unique();
            $table->string('cnttUserPhone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('cnttUserAvatar');
            $table->string('cnttUserLevel');
            $table->string('cnttUserStatus')->default(2);
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
        Schema::dropIfExists('users');
    }
}

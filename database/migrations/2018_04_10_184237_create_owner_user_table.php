<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200)->nullable();
            $table->string('department', 100)->default('Customer Service');
            $table->string('email', 100)->unique()->nullable();
            $table->string('phone', 30)->nullable();
            $table->string('location', 200)->nullable();
            $table->string('username', 100);
            $table->string('password', 100);
            $table->boolean('user_level')->nullable();
            $table->string('user_acl', 10)->nullable();
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('owner_users');
    }
}

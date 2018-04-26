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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned()->nullable();
            $table->string('package_id')->nullable();
            $table->enum('user_type', ['PPPoE', 'Hotspot'])->default('PPPoE');
            $table->string('name', 50)->nullable();
            $table->string('password')->nullable();
            $table->string('firstname', 200)->nullable();
            $table->string('lastname', 200)->nullable();
            $table->string('email')->unique();
            $table->string('department', 200)->nullable();
            $table->string('company', 200)->nullable();
            $table->string('workphone', 200)->nullable();
            $table->string('homephone', 200)->nullable();
            $table->string('mobilephone', 200)->nullable();
            $table->string('address_line1', 100)->nullable();
            $table->string('address_line2', 100)->nullable();
            $table->string('address_line3', 100)->nullable();
            $table->string('city', 200)->nullable();
            $table->string('state', 200)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('zip', 200)->nullable();
            $table->string('notes', 200)->nullable();
            $table->enum('idcard_type', ['National ID','Birth Certificate','Passport','Other']);
            $table->string('changeuserinfo', 128)->nullable();
            $table->string('portalloginpassword', 128)->nullable()->default('');
            $table->integer('enableportallogin')->nullable()->default(0);
            $table->string('creationby', 128)->nullable();
            $table->string('updateby', 128)->nullable();
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

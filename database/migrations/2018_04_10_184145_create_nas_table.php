<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('nas_ip', 128)->index('nasip');
            $table->string('shortname', 32)->nullable();
            $table->enum('type', ['MikroTik','Cisco','Chillispot'])->default('MikroTik');
            $table->integer('ports')->nullable();
            $table->string('secret', 60)->default('secret');
            $table->string('description', 200)->nullable()->default('RADIUS Client');
            $table->string('api_username', 20)->nullable();
            $table->string('api_password', 20)->nullable();
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
        Schema::dropIfExists('nas');
    }
}

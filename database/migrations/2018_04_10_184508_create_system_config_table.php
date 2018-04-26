<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_config', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('smtp_host', 200)->nullable();
            $table->integer('smtp_port')->nullable();
            $table->string('encrypt_protocol', 10)->nullable();
            $table->string('smtp_username', 200)->nullable();
            $table->string('smtp_password', 200)->nullable();
            $table->string('sms_body_temlate', 200)->nullable();
            $table->string('sms_api_url', 250)->nullable();
            $table->string('cisco_alt_pool', 10)->default('blocked');
            $table->string('mikrotik_alt_pool', 10)->default('blocked');
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
        Schema::dropIfExists('system_config');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profile', function (Blueprint $table) {
            $table->integer('user_id')->unsigned()->index('username');
            $table->integer('owner_id')->unsigned();
            $table->integer('package_id')->unsigned();
            $table->string('allowed_nas_id', 20)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('userpass', 50)->nullable();
            $table->tinyInteger('auth_type')->nullable();
            $table->timestamp('activated_on')->nullable();
            $table->dateTime('expiration')->nullable();
            $table->integer('alert_days')->nullable()->default(7);
            $table->boolean('sms_alert')->default(0);
            $table->boolean('email_alert')->default(0);
            $table->integer('grace_period')->default(0);
            $table->string('groupname', 50)->nullable();
            $table->boolean('is_active')->default(1);
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
        Schema::dropIfExists('user_profile');
    }
}

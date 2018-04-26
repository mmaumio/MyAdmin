<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id')->unsigned();
            $table->string('name', 50)->nullable();
            $table->string('user_group', 100)->nullable();
            $table->string('bw_download', 200)->nullable();
            $table->string('bw_upload', 200)->nullable();
            $table->string('burst_bw_rate_limit', 100)->default('0');
            $table->string('fup_bw_download', 100)->default('0');
            $table->string('bw_data_limit', 100)->default('0');
            $table->decimal('rate', 13, 2)->default('0.00');
            $table->enum('billing_period', ['Monthly','Weekly','Daily','Hourly'])->default('Monthly');
            $table->tinyInteger('grace_period')->default('0');
            $table->string('nas', 20)->default('MikroTik');
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
        Schema::dropIfExists('packages');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOwnerinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ownerinfo', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('owner_id')->unsigned();
			$table->string('name', 200)->nullable();
			$table->string('owner_email', 200)->nullable();
			$table->string('company', 200)->nullable();
			$table->string('workphone', 200)->nullable();
			$table->string('homephone', 200)->nullable();
			$table->string('mobilephone', 200)->nullable();
			$table->string('address_line1', 200)->nullable();
			$table->string('address_line2', 200)->nullable();
			$table->string('address_line3', 200)->nullable();
			$table->string('city', 200)->nullable();
			$table->string('state', 200)->nullable();
			$table->string('country', 100)->nullable();
			$table->string('zip', 200)->nullable();
			$table->string('notes', 200)->nullable();
			$table->string('changeuserinfo', 128)->nullable();
			$table->string('creationby', 128)->nullable();
			$table->string('updateby', 128)->nullable();
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
		Schema::drop('ownerinfo');
	}

}

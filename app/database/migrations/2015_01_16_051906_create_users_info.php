<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersInfo extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users_info', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('first_name', 100);
			$table->string('last_name', 100);
			$table->string('middle_name', 100);
			$table->string('occupation', 100);
			$table->timestamp('birthdate');
			$table->string('address');
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
		Schema::drop('users_info');
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeminarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seminars', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->mediumText('description');
			$table->string('price');
			$table->timestamp('start_at');
			$table->timestamp('end_at');
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
		Schema::drop('seminars');
	}

}

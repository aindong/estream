<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSeminarSpeakersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seminar_speakers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('seminar_id');
			$table->string('fname');
			$table->string('lname');
			$table->string('mname');
			$table->string('image');
			$table->mediumText('bio');s
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
		Schema::drop('seminar_speakers');
	}

}

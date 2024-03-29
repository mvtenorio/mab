<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoviesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('movies', function(Blueprint $table) {
			$table->increments('id');
			$table->string('title');
			$table->string('year');
			$table->string('directors');
			$table->date('watched_at');
			$table->integer('rating')->unsigned();
			$table->string('poster')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('movies');
	}

}

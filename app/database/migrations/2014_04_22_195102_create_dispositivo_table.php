<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDispositivoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('dispositivo', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nombre');
			$table->string('serial')->unique();
			$table->float('potenciaMax');
			$table->float('potenciaMin');
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
		Schema::drop('dispositivo');
	}

}

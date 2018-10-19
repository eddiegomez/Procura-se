<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocalizacaoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('localizacao', function(Blueprint $table)
		{
			$table->integer('id_localizacao', true);
			$table->string('nome', 45)->nullable();
			$table->string('adress', 80)->nullable();
			$table->float('lat', 10, 6)->nullable();
			$table->float('lng', 10, 6)->nullable();
			$table->string('type', 45)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('localizacao');
	}

}

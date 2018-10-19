<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMoradaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('morada', function(Blueprint $table)
		{
			$table->integer('id_morada', true);
			$table->string('provincia', 45)->nullable();
			$table->string('bairro', 45)->nullable();
			$table->string('avenida', 45)->nullable();
			$table->integer('quarteirao')->nullable();
			$table->integer('casa')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('morada');
	}

}

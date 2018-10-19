<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->integer('id_usuario', true);
			$table->string('usuario', 45)->nullable();
			$table->string('senha', 45)->nullable();
			$table->string('tipo', 15)->nullable();
			$table->integer('foto_id_foto')->index('fk_usuario_foto1_idx');
			$table->primary(['id_usuario','foto_id_foto']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('usuario');
	}

}

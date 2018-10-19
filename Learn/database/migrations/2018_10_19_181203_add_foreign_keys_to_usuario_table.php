<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
			$table->foreign('foto_id_foto', 'fk_usuario_foto1')->references('id_foto')->on('foto')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('usuario', function(Blueprint $table)
		{
			$table->dropForeign('fk_usuario_foto1');
		});
	}

}

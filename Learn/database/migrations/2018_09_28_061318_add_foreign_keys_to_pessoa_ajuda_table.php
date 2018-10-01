<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPessoaAjudaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pessoa_ajuda', function(Blueprint $table)
		{
			$table->foreign('id_usuario', 'fk_pessoa_ajuda_usuario1')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pessoa_ajuda', function(Blueprint $table)
		{
			$table->dropForeign('fk_pessoa_ajuda_usuario1');
		});
	}

}

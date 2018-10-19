<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('admin', function(Blueprint $table)
		{
			$table->foreign('id_morada', 'fk_admin_morada1')->references('id_morada')->on('morada')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('id_usuario', 'fk_admin_usuario1')->references('id_usuario')->on('usuario')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('admin', function(Blueprint $table)
		{
			$table->dropForeign('fk_admin_morada1');
			$table->dropForeign('fk_admin_usuario1');
		});
	}

}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin', function(Blueprint $table)
		{
			$table->integer('id_admin', true);
			$table->string('nome', 45)->nullable();
			$table->char('sexo', 1)->nullable();
			$table->date('data_nasc')->nullable();
			$table->string('morada', 45)->nullable();
			$table->string('email', 45)->nullable();
			$table->integer('telefone')->nullable();
			$table->integer('id_usuario')->index('fk_admin_usuario1_idx');
			$table->primary(['id_admin','id_usuario']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('admin');
	}

}

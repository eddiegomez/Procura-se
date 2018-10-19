<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamiliarTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('familiar', function(Blueprint $table)
		{
			$table->integer('id_familiar', true);
			$table->string('nome', 45)->nullable();
			$table->integer('contacto')->nullable();
			$table->string('grau_parentesco', 45)->nullable();
			$table->integer('pessoa_perdida_id_pessoa_perdida')->index('fk_familiar_pessoa_perdida1_idx');
			$table->integer('morada_id_morada')->index('fk_familiar_morada1_idx');
			$table->primary(['id_familiar','pessoa_perdida_id_pessoa_perdida','morada_id_morada']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('familiar');
	}

}

<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class morada extends Model
{
	public $primaryKey='id_morada';
    public $table='morada';

	public function guardar_morada($request){
	    $morada = new morada();
		$morada->bairro = $request->input('bairro');
		$morada->avenida = $request->input('avenida');
		$morada->quarteirao = $request->input('quarteirao');
		$morada->casa = $request->input('nr');
		$morada->save();
		return $morada->id_morada;
	}
}

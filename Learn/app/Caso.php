<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Caso extends Model
{
    public $primaryKey='id_caso';
    public $table='caso';
    public $timestamp = 'false';

    public function guardar_caso($id){
        $caso = new caso();
        $caso->id_pessoa_perdida = $id;
        $caso->id_pessoa_ajuda = 2;
        $caso->id_localizacao = 1;
        $caso->save();
        return $caso->id_caso;
    }
}

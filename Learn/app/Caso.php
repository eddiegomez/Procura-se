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
        $caso->id_pessoa_ajuda = 1;
        $caso->id_localizacao = 1;
        $caso->save();
        return $caso->id_caso;
    }
  

//    public function pessoa_perdida(){
//        return $this->belongsTo(Pessoa_perdida::class,'id_pessoa_perdida','id_p_perdida');
//    }
//    public function pessoa_ajuda(){
//        return $this->belongsTo(Pessoa_ajuda::class,'id_pessoa_ajuda','id_p_ajuda');
//
//    }
//    public function localizacao(){
//        return $this->belongsTo(Localizacao::class,'id_localizacao','id_localizacao');
//
//    }

}

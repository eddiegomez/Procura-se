<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Pessoa_ajuda extends Model
{
    public $primaryKey='id_p_ajuda';
    public $table='Pessoa_ajuda';


    public function caso(){
        return $this->hasOne(Caso::class);
    }

}

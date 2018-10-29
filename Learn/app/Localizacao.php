<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    public $primaryKey='id_localizacao';
    public $table='localizacao';
    public $timestamps=false;


    public function caso(){
        return $this->hasOne(Caso::class);
    }
}

<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Localizacao extends Model
{
    public $table='localizacao';
    public $timestamps=false;


    public function caso(){
        return $this->hasOne(Caso::class);
    }
}

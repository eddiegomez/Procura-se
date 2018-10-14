<?php

namespace Laravel_Learn;

use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\
use Carbon\Carbon;
class Pessoa_perdida extends Model
{
    public $primaryKey='id_p_perdida';
    public $table='pessoa_perdida';
    public $timestamp = 'false';


    /**
     * @return mixed
     */
    public function age() {
//        return strtotime(Pessoa_perdida::first()->data_nasc);
        $date = new Carbon($this->data_nasc);
        return $date->diffInYears();
    }
}

<?php

namespace Laravel_Learn;

use Faker\Provider\DateTime;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\
use Carbon\Carbon;

class Pessoa_perdida extends Model
{
    public $primaryKey = 'id_p_perdida';
    public $table = 'pessoa_perdida';
    public $timestamp = 'false';

    public $age;

    /**
     * @return mixed
     */

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->age =$this->data_nasc;
    }

    public function age()
    {
//        return strtotime(Pessoa_perdida::first()->data_nasc);
        $date = new Carbon($this->data_nasc);
        return $date->diffInYears();
    }

    public function dias()
    {
//        return strtotime(Pessoa_perdida::first()->data_nasc);
        $date = new Carbon($this->created_at);
        return $date->diffInDays();
    }


    public function caso()
    {
        return $this->hasOne(Caso::class);
    }
}

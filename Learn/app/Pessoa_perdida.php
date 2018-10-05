<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class Pessoa_perdida extends Model
{
    public $primaryKey='id_pessoa_perdida';
    public $table ='pessoa_perdida';
    public $timestamps = false;
}

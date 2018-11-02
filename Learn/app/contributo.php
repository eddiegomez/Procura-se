<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class contributo extends Model
{
    public $primaryKey='id_contributo';
    public $table='contributo';
    public $timestamp = false;
}

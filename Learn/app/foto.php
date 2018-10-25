<?php

namespace Laravel_Learn;

use Illuminate\Database\Eloquent\Model;

class foto extends Model
{
	public $primaryKey='id_foto';
    public $table='foto';
    public $timestamp = false;

    public function guardar_foto($request){
        $foto = new foto();
        
        $file = $request->file('foto');
        $name = time().$file->getClientOriginalName();
        $file->move(public_path().'/imgs_p_perdidas/',$name);
        $foto->nome_foto=$name;   
        $foto->save();

        return $foto->id_foto;
    }

    public function age() {
//        return strtotime(Pessoa_perdida::first()->data_nasc);
        $date = new Carbon($this->data_nasc);
        return $date->diffInYears();
    }
    public function dias() {
//        return strtotime(Pessoa_perdida::first()->data_nasc);
        $date = new Carbon($this->created_at);
        return $date->diffInDays();
    }
}

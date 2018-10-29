<?php

namespace Laravel_Learn;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;

    public $primaryKey='id_usuario';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function guardar_user($request){
        $usr = new user();
        $usr->usuario = $request->input('usuario');
        $usr->senha = $request->input('senha');
        $usr->tipo = 'pessoa_ajuda';
        $usr->save();
        return $usr->id_usuario;
    }

    public function admin_auth(Request $request) {
        $credentials = array($request->email, $request->password);
            $remember = False; // funcionalidade remember me 
            if(!Auth::guard('web')->attempt($credentials, $remember)) { // note que no guard estou a especificar um dos que defini em `config/auth`
                 return redirect('/'); // autenticação não foi bem sucedida
            }
         return redirect('/user'); // se entrar foi bem sucedida
}
}

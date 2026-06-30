<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuari extends Authenticatable
{
    use Notifiable;

    protected $table = 'Usuaris';

    protected $fillable = [
        'email',
        'password',
        'remember_token',
        'rol',
    ];

    /*protected $hidden = [
        'password',
        'remember_token',
    ];*/

    public $timestamps = true;

    public function alumne()
    {
        return $this->hasOne(Alumne::class, 'usuari_id');
    }

    public function empresa()
    {
        return $this->hasOne(Empresa::class, 'usuari_id');
    }
    
}

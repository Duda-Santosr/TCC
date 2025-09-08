<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Paciente extends Authenticatable
{
    use Notifiable;

    protected $guard = 'paciente';

    protected $fillable = [
        'name',
        'cpf',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
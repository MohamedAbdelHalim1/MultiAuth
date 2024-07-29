<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class staff extends Authenticatable
{
    use Notifiable;

    protected $table = 'staffs';

    protected $guarded = [];

    protected $fillable = [
        'name', 'email', 'password','role'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

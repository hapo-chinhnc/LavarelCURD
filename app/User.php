<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    protected $table = 'users';

    protected $fillable = [
        'name', 'gender','email', 'phone', 'address', 'img'
    ];

    static public function getUsers()
    {
        return self::select('*')->get();
    }
}

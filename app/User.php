<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use softDeletes;
    protected $table = 'users';

    protected $fillable = [
        'name', 'gender','email', 'phone', 'address', 'img'
    ];
}

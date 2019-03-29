<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

//    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * 只有 $fillable 包含的字段才能被批量赋值
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * 隐藏敏感信息
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

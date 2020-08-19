<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable // 授权功能引用
{
    // 通知相关功能引用
    use Notifiable;

    protected $table = 'users'; // 可自定义

    /**
     * The attributes that are mass assignable.
     * 只有包含在改属性中的字段才能被正常更新
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * 设置敏感字段隐藏
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     * 转换显示类型
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gravatar($size = 100)
    {
        $hash = md5(strtolower(trim($this->attributes['email'])));
        return 'http://www.gravatar.com/avatar/' . $hash . '?s=' . $size;
    }
}

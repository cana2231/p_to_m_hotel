<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * 一括割り当て可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'password',
    ];

    /**
     * 配列に対して非表示にする必要がある属性
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * ネイティブ型にキャストする必要がある属性
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

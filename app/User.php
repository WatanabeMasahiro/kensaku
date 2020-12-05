<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\JaPasswordReset;


class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contents()
    {
        return $this->hasmany('App\Content');
    }

    /**
    * パスワードリセット通知の送信
    *
    * @param  string  $token
    * @return void
    */

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new JaPasswordReset($token));
    }
}
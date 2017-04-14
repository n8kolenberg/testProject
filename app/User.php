<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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

    public function dicks()
    {
        return $this->hasMany(Dick::class);
    }

    public function balls()
    {
        return $this->hasMany(Ball::class);
    }

    public function setPasswordAttribute($password)
    {
        if (\Hash::needsRehash($password)) {
            $password = \Hash::make($password);
        }
        $this->attributes['password'] = $password;
    }

    public function publish(Dick $dick) {
        $this->dicks()->save($dick);
//        Dick::create([
//            'name' => request('name'),
//            'body' => request('body'),
//            'user_id' => auth()->id()
//        ]);
    }



}

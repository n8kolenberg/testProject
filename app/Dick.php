<?php

namespace App;


class Dick extends Model
{


    public function balls()
    {
        return $this->hasMany(Ball::class)->orderBy('created_at', 'DESC');
    }

    public function addBalls($body) {

        $this->balls()->create(['body' => $body]);
        
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

<?php

namespace App;


class Dick extends Model
{


    public function balls()
    {
        return $this->hasMany(Ball::class);
    }
}

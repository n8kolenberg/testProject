<?php

namespace App;


class Ball extends Model
{
    public function dick()
    {
        return $this->belongsTo(Dick::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}

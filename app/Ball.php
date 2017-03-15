<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ball extends Model
{
    public function dick()
    {
        return $this->belongsTo(Dick::class);
    }

}

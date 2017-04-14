<?php

namespace App\Http\Controllers;

use App\Dick;
use App\Ball;

class BallsController extends Controller
{
    public function store(Dick $dick)
    {
        $dick->addBall(request('body'));

        return back();
    }
}

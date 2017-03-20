<?php

namespace App\Http\Controllers;

use App\Dick;
use App\Ball;

use Illuminate\Http\Request;

class BallsController extends Controller
{
    public function store(Dick $dick) {
        $this->validate(request(), ['body' => 'required|min:2' ]);
        $dick->addBalls(request('body'));

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dick;

class DicksController extends Controller
{
    public function index() {
        $dicks =  Dick::all();
        return view('dickindex', compact('dicks'));
    }

    public function show(Dick $dick) {

        return view('dickshow', compact('dick'));
    }

    public function create() {
        return view('dicks.create');

    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'body' => 'required'
        ]);

        Dick::create(request(['name', 'body']));

        return redirect('/dicks');
    }

}

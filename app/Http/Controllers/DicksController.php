<?php

namespace App\Http\Controllers;

use App\Dick;

class DicksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $dicks = Dick::all();

        return view('dickindex', compact('dicks'));
    }

    public function show(Dick $dick)
    {
        return view('dickshow', compact('dick'));
    }

    public function create()
    {
        return view('dicks.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required',
            'body' => 'required'
        ]);

        auth()->user()->publish(
            new Dick(request(['name', 'body']))
        );

        return redirect('/dicks');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function authenticate()
    {
        //if (!auth()->attempt(['email' => $data['email'],
        //    'password' => bcrypt($data['password'])])) {
            // Authentication passed...
        //if (! auth()->attempt(request(['email', 'password']))) {

        if (! auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors([
                'message' => 'Please check your credentials and try again'
            ]);
        };

            return redirect()->home();
    }

        public function destroy()
        {
            auth()->logout();
            return redirect()->home();
        }
}
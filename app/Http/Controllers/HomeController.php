<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        \Debugbar::info(auth()->user());

        try {
            \Debugbar::warning('warning message');
            \Debugbar::addMessage('Before view return', 'viewlabel');
             return view('home');
        } catch(Exception $e) {
            \Debugbar::error($e);
        }

    }
}

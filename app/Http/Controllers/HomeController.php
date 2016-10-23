<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Church;

use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $church = Church::whereUserId(Auth::user()->id)->first();
        return view('home', compact('church'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //home
    public function home()
    {
    	return view('home');
    }

    //masterchurch
    public function masterchurch()
    {
    	return view('masterchurch');
    }

    //navbar
    public function navbar()
    {
    	return view('navbar');
    }

    //about
    public function about()
    {
    	return view('about');
    }

    //contact
    public function contact()
    {
    	return view('contact');
    }

    //events
    public function event()
    {
    	return view('event');
    }

    //register
    public function register()
    {
        return view('register');
    }

    //login
    public function login()
    {
        return view('login');
    }
    
    //search navigator
    public function searchnav()
    {
        return view('searchnav');
    }

    //church details
    public function churchdet()
    {
        return view('churchdet');
    }

    //weekly timetable
    public function weekly()
    {
        return view('weekly');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quote;

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
        $id = auth()->user()->id;
        $quotes = Quote::where('user_id', $id)->get();

        return view('home', compact('quotes'));
    }
}

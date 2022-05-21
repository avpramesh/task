<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

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
        $pmatch = DB::table('users')->where('gender', '!=', Auth()->user()->gender)->get();

        if ( Auth()->user()->email=='admin@gmail.com' ) {// do your magic here
            return redirect()->route('dashboard');
        }
        //dd($pmatch);
        return view('home')->with('matches',$pmatch);
    }

    public function search()
    {
        $users = DB::table('users')->where('email', '!=', Auth()->user()->email)->get();
        return view('search')->with('users',$users);
    }
}

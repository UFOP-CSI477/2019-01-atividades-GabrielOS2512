<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use App\User;
use App\Test;
use Illuminate\Support\Facades\Auth;

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
      return view('procedures.index', ['procedures' => Procedure::all()]);
      // if (Auth::check()){
      //   //return view('paciente')->with(Auth::user()->name);
      //   return view('tests.index', ['tests' => Test::all()]);
      // }
      // else {
      //   return redirect()->route('login');
      // }
    }
}

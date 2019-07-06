<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use App\User;
use App\Test;

class PrincipalController extends Controller
{
  public function main() {
    return view('home');
    $procedures = Procedure::all();
      return view('procedures.index',['procedures' => $procedures]);
  }
  public function index()
  {
    $procedures = Procedure::all();
      return view('procedures.index',['procedures' => $procedures]);
  }
  public function show(Procedure $procedure)
  {
    return view('procedures.show')
        ->with('procedure', $procedure);
  }

}

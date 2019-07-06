<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use App\User;
use App\Test;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
  public function index() {
    return view('welcome', ['procedures' => Procedure::all()]);
  }
}

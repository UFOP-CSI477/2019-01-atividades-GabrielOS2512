<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use App\User;
use App\Test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OperadorController extends Controller
{
  public function entrar() {
    if (Auth::check()){
      if(Auth::user()->type == 2){
        return view('operador.index')->with(Auth::user()->name);
      }
      else {
        return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
      }
    }
    else {
      return redirect()->route('login');
    }
  }

    public function index() {

      $tests = Test::orderBy('date','desc')->get();
      // View -> apresentar
      // if (Auth::check()){
      //   if(Auth::user()->type == 2){
      //     return view('operador.index',['tests'=>$tests]);
      //   }
      //   else {
      //     return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
      //   }
      // }
      // else {
      //       return redirect()->route('login');
      // }
      if (Auth::check()){
        if(Auth::user()->type == 2){
          $procedures = Procedure::orderBy('name','asc')->get();
          return view('operador.index')
                  ->with('procedures', $procedures);
        }
        else {
          return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
        }
      }
      else {
        return redirect()->route('login');
      }

    }

    public function show(Procedure $procedure)
    {
      return view('procedures.show')
          ->with('procedure', $procedure);
    }

    public function edit(Procedure $procedure)
    {
      // $user = User::all();
      // return view('procedures.edit',['procedure'=>$procedure,'user'=>$user]);

      if (Auth::check()){
        if(Auth::user()->type == 1){
        $user = User::all();
        return view('operador.create',['users'=>$user]);
        }
        else {
          return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
        }
      }
      else {
        return redirect()->route('login');
      }
    }

    public function update(Request $request, Procedure $procedure)
    {
      $procedure->fill($request->all());

      // Para ambas as opções:
      $procedure->save();

      session()->flash('message', 'Procedure updated successfully!');

      return redirect()->route('operador.show', $procedure->id);
    }

}

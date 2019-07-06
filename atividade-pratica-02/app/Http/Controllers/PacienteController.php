<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Procedure;
use App\User;
use App\Test;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{

  public function entrar() {
    if (Auth::check()){
      if(Auth::user()->type == 2){
        return view('pacientes.index')->with(Auth::user()->name);
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
    if (Auth::check()){
      if(Auth::user()->type == 3){
        $tests = DB::select('select tests.id as id, tests.date as data , procedures.name as nome_p from tests , users , procedures where tests.user_id = users.id and tests.procedure_id = procedures.id and tests.user_id = ? order by tests.date desc' , [Auth::user()->id]);
                return view('pacientes.index' , ['tests' => $tests]);
      }
      else {
        return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
      }
    }
    else {
      return redirect()->route('login');
    }

  }

  public function create()
  {
    $user = User::all();
    $procedure = Procedure::all();

      //return view('tests.create');
      if (Auth::check()){
        // if(Auth::user()->type == 1) //Auth::logout();
          return view('pacientes.create',['users'=>$user, 'procedures'=>$procedure]);
      }
      else {
        return redirect()->route('login');
      }
  }
  public function store(Request $request)
  {
    Test::create($request->all());

    session()->flash('mensagem', 'Exame marcado com sucesso!');
    return redirect()->route('pacientes.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Test  $test
   * @return \Illuminate\Http\Response
   */
  public function show(Test $test)
  {
    $tests = DB::select('select tests.id as id, tests.date as data , procedures.name as nome_p from tests , users , procedures where tests.id = ? and tests.procedure_id = procedures.id and tests.user_id = ? order by tests.date desc' ,$test, [Auth::user()->id]);
            return view('pacientes.show' , ['tests' => $tests]);
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Test  $test
   * @return \Illuminate\Http\Response
   */
  public function edit(Test $test)
  {
    // $user = User::all();
    // $procedure = Procedure::all();
    // return view('tests.edit',['test'=>$test,'procedure'=>$procedure,'user'=>$user]);
    $user = User::all();
    $procedure = Procedure::all();

      //return view('tests.create');
      if (Auth::check()){
        // if(Auth::user()->type == 1) //Auth::logout();
          return view('pacientes.create',['users'=>$user, 'procedures'=>$procedure]);
      }
      else {
        return redirect()->route('login');
      }
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Test  $test
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Test $test)
  {
    $test->fill($request->all());

    // Para ambas as opções:
    $test->save();

    session()->flash('mensagem', 'Test atualizado com sucesso!');

    return redirect()->route('pacientes.show', $test->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Test  $test
   * @return \Illuminate\Http\Response
   */
  public function destroy(Test $test)
  {
    DB::table('tests')->where('id', '=', $test)->delete();
    return redirect()->route('pacientes.index');
  }
}

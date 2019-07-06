<?php

namespace App\Http\Controllers;

use App\Test;
use App\Procedure;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tests = Test::orderBy('date','desc')->get();

      // View -> apresentar
      if (Auth::check()){
          return view('tests.index')->with('tests', $tests);
        }
        else {
            return redirect()->route('login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $user = User::all();
      $procedure = Procedure::all();

        //return view('tests.create');
        if (Auth::check()){
          // if(Auth::user()->type == 1) //Auth::logout();
            return view('tests.create',['users'=>$user, 'procedures'=>$procedure]);
        }
        else {
          return redirect()->route('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Test::create($request->all());

      session()->flash('mensagem', 'Test inserido com sucesso!');
      return redirect()->route('tests.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
      return view('tests.show')
          ->with('test', $test);
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
            return view('tests.create',['users'=>$user, 'procedures'=>$procedure]);
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

      return redirect()->route('tests.show', $test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
      $test->delete();
      session()->flash('mensagem', 'Test excluído com sucesso!');

      return redirect()->route('tests.index');
    }
}

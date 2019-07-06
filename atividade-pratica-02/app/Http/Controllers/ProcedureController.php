<?php

namespace App\Http\Controllers;

use App\Procedure;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $procedures = Procedure::orderBy('name','asc')->get();
      return view('procedures.index')
              ->with('procedures', $procedures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      if (Auth::check()){
        if(Auth::user()->type == 1){
        $user = User::all();
        return view('procedures.create',['users'=>$user]);
        }
        else {
          return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
        }
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
      $procedure = new Procedure;
      $procedure->name = $request->name;
      $procedure->price = $request->price;
      $procedure->user_id = $request->user_id;
      $procedure->save();
      return redirect()->route('procedures.index')->with('message', 'Procedure created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {
      return view('procedures.show')
          ->with('procedure', $procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure)
    {
      // $user = User::all();
      // return view('procedures.edit',['procedure'=>$procedure,'user'=>$user]);

      if (Auth::check()){
        if(Auth::user()->type == 1){
        $user = User::all();
        return view('procedures.edit',['procedure'=>$procedure,'user'=>$user]);
        }
        else {
          return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
        }
      }
      else {
        return redirect()->route('login');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedure)
    {
      // $procedure = Procedure::findOrFail($id);
      // $procedure->name = $request->name;
      // $procedure->price = $request->price;
      // $procedure->user_id = $request->user_id;
      // $procedure->save();
      // return redirect()->route('procedures.index')->with('message', 'Procedure updated successfully!');

      $procedure->fill($request->all());

      // Para ambas as opções:
      $procedure->save();

      session()->flash('message', 'Procedure updated successfully!');

      return redirect()->route('procedures.show', $procedure->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procedure  $procedure
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedure $procedure)
    {
      if (Auth::check()){
        if(Auth::user()->type == 1){
          $procedure->delete();
          session()->flash('mensagem', 'Procedure excluído com sucesso!');
          return redirect()->route('procedures.index');
        }
        else {
          return redirect()->back()->with('alert', 'Você não tem permisão para realizar esta ação!');
        }
      }
      else {
        return redirect()->route('login');
      }
    }
}

<?php

namespace App\Http\Controllers;

use App\Cidade;
use App\Estado;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $cidades = Cidade::all();
    // View -> apresentar
    return view('cidades.index')
            ->with('cidades', $cidades);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $estado = Estado::all();
      return view('Cidades.create',['estados'=>$estado]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    Cidade::create($request->all());

    // Mensagem de sucesso:
    // -- Flash
    // mensagem -> campo
    session()->flash('mensagem', 'Cidade inserida com sucesso!');

    //return redirect('/estados');
    return redirect()->route('cidades.index');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Cidade  $Cidades
   * @return \Illuminate\Http\Response
   */
  public function show(Cidade $cidades)
  {
    return view('cidades.show')
        ->with('cidades', $cidades);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Cidade  $Cidade
   * @return \Illuminate\Http\Response
   */
  public function edit(Cidade $cidades)
  {
    $estado = Estado::all();
    return view('cidades.edit',['cidade'=>$cidades,'estado'=>$estado]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Cidade  $Cidade
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Cidade $cidades)
  {
    $cidades->fill($request->all());

    // Para ambas as opções:
    $cidades->save();

    session()->flash('mensagem', 'Cidade atualizado com sucesso!');

    return redirect()->route('cidades.show', $cidades->id);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Cidade  $Cidade
   * @return \Illuminate\Http\Response
   */
  public function destroy(Cidade $cidades)
  {
      $cidades->delete();

      return redirect()->route('cidades.index')
                      ->with('success','Cidade deletado');
  }
}

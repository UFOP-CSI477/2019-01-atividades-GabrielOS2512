<?php

namespace App\Http\Controllers;

use App\Regioes;
use Illuminate\Http\Request;

class RegioesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      // Model -> recuperação dos dados
      $regioes = Regioes::all();
      // View -> apresentar
      return view('regioes.index')->with('regioes', $regioes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regioes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->all());

      // Validação - check up
      // Ok?

      // Gravar
      //return ($request->nome);
      //return ($request->input('nome'));

      // Opção 01:
      // $estado = new Estado;
      // $estado->nome = $request->nome;
      // $estado->sigla = $request->sigla;
      //
      // $estado->save();

      Regioes::create($request->all());

      // Mensagem de sucesso:
      // -- Flash
      // mensagem -> campo
      session()->flash('mensagem', 'Região inserida com sucesso!');

      //return redirect('/estados');
      return redirect()->route('regioes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function show(Regioes $regioes)
    {
      // $id <-
      //$regioes = Regioes::find($id);
      return view('regioes.show')->with('regioes', $regioes);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function edit(Regioes $regioes)
    {
      return view('regioes.edit')
          ->with('regioes', $regioes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Regioes $regioes)
    {
      // Validações ->

      // Opção 01:
      // $estado->nome = $request->nome

      // Opção 02:
      $regioes->fill($request->all());

      // Para ambas as opções:
      $regioes->save();

      session()->flash('mensagem', 'Região atualizado com sucesso!');

      return redirect()->route('regioes.show', $regioes->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Regioes  $regioes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Regioes $regioes)
    {
      // Validações ->
      // -- chave estrangeira

      // Excluir a regiao
      $regioes->delete();
      session()->flash('mensagem', 'Região excluída com sucesso!');

      return redirect()->route('regioes.index');
    }
}

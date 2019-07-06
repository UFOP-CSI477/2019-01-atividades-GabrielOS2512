@extends('principal')

@section('titulo', 'Editar Regiao')

@section('conteudo')

  <form method="post" action="{{ route('regioes.update', $regioes->id) }}">

    @csrf
    @method('PATCH')

    <p>Nome: <input type="text" name="nome" value="{{ $regioes->nome }}"></p>
    <p>Sigla: <input type="text" name="sigla" value="{{ $regioes->abreviacao }}"></p>

    <input type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection

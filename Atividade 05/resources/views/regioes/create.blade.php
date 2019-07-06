@extends('principal')

@section('titulo', 'Inserir Regiao')



@section('conteudo')

  <form method="post" action="{{ route('regioes.store') }}">

    @csrf

    <p>Nome: <input type="text" name="nome"></p>
    <p>Abreviação: <input type="text" name="abreviacao"></p>

    <input type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection

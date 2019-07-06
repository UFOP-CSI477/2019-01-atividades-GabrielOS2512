@extends('principal')

@section('titulo', 'Exibir Cidade')

@section('conteudo')

  <h1>Cidade: {{ $cidades->nome }}</h1>

  <p>Código: {{ $cidades->id }}</p>
  <p>Nome: {{ $cidades->nome }}</p>
  <p>Sigla: {{ $cidades->sigla }}</p>


  <!-- Voltar para a lista de Cidades //-->
  <a href="{{ route('cidade.index') }}">Voltar</a>

  <!-- Editar o Cidade corrente //-->
  <a href="{{ route('cidade.edit', $cidades->id) }}">Editar</a>

  <!-- Excluir o Cidade corrente //-->
  <form method="post" action="{{ route('Cidades.destroy', $cidades->id) }}" onsubmit="return confirm('Confirma exclusão do Cidade?');" >

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

  </form>










@endsection

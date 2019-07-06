@extends('principal')

@section('titulo', 'Exibir Região')

@section('conteudo')

  <h1>Região: {{ $regioes->nome }}</h1>

  <p>Código: {{ $regioes->id }}</p>
  <p>Nome: {{ $regioes->nome }}</p>
  <p>Abreviação: {{ $regioes->abreviacao }}</p>


  <!-- Voltar para a lista de regiao //-->
  <a href="{{ route('regioes.index') }}">Voltar</a>

  <!-- Editar a regiao corrente //-->
  <a href="{{ route('regioes.edit', $regioes->id) }}">Editar</a>

  <!-- Excluir a regiao corrente -->
  <form method="post" action="{{ route('regioes.destroy', $regioes->id) }}" onsubmit="return confirm('Confirma exclusão da Região?');" >

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

  </form>










@endsection

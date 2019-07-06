@extends('layouts.app')

@section('titulo', 'Exibir Test')

@section('conteudo')

  <h1>Detalhes</h1>

  <p>Código: {{ $test->id }}</p>
  <p>Data: {{ $test->data }}</p>
  <p>Procedure: {{ $test->namep }}</p>

  <a href="{{ route('pacientes.index') }}">Voltar</a>

  <a href="{{ route('pacientes.edit', $test->id) }}">Editar</a>

  <form method="post" action="{{ route('pacientes.destroy', $test->id) }}" onsubmit="return confirm('Confirmar o cancelamento do Exame?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>










@endsection

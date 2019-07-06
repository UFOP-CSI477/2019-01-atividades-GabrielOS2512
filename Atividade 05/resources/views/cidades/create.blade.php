@extends('principal')

@section('titulo', 'Inserir Cidade')



@section('conteudo')

  <form method="post" action="{{ route('cidade.store') }}">

    @csrf

    <p>Nome: <input type="text" name="nome"></p>
    <p>Estado:</p>
    <select name="estado_id">
      @foreach($estado as $e)
        <option value="{{ $e->id }}">{{ $e->sigla }}</option>
      @endforeach
    </select>

    <input type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection

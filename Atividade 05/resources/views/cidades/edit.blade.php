@extends('principal')

@section('titulo', 'Editar Cidade')

@section('conteudo')

  <form method="post" action="{{ route('cidade.update', $Cidade->id) }}">

    @csrf
    @method('PATCH')

    <p>Nome: <input type="text" name="nome" value="{{ $Cidade->nome }}"></p>
    <p>Estado:</p>
    <select name="estado_id">
      @foreach($estado as $e)
        <option value="{{ $e->id }}"

          @if ( $cidade->estado_id == $e->id)
            selected
          @endif
          >{{ $e->sigla }}</option>
      @endforeach
    </select>
    <input type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection

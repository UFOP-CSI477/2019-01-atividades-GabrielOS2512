@extends('principal')

@section('titulo', 'Inserir Test')



@section('conteudo')

  <form method="post" action="{{ route('tests.store') }}">

    @csrf


    <p>User: <select name="user_id">
        <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
    </select></p>
    <p>Procedure: <select name="procedure_id">
      @foreach($procedures as $p)
        <option value="{{ $p->id }}">{{ $p->name }}</option>
      @endforeach
    </select></p>
    <p>Date: <input type="date" name="date"></p>

    <input type="submit" name="btnSalvar" value="Incluir">

  </form>


@endsection

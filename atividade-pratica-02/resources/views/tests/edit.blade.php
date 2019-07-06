@extends('principal')

@section('titulo', 'Editar Procedure')

@section('conteudo')

  <form method="post" action="{{ route('tests.update', $test->id) }}">

    @csrf
    @method('PATCH')

    <p>Procedure: <select name="procedure_id">
      @foreach($procedure as $p)
        <option value="{{ $p->id }}"

          @if ( $test->procedure_id == $p->id)
            selected
          @endif
          >{{ $p->name }}</option>
      @endforeach
    </select></p>
    
    <p>User: <select name="user_id">
      @foreach($user as $u)
        <option value="{{ $u->id }}"

          @if ( $test->user_id == $u->id)
            selected
          @endif
          >{{ $u->name }}</option>
      @endforeach
    </select></p>



    <p>Date: <input type="date" name="name"></p>

    <input type="submit" name="btnSalvar" value="Editar">

  </form>





@endsection

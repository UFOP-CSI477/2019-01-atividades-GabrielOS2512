@extends('layouts.app')

@section('titulo', 'Exibir Procedure')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
  <h1>Detalhes</h1>

  <p>Código: {{ $procedure->id }}</p>
  <p>Nome: {{ $procedure->name }}</p>
  <p>Preço: {{ $procedure->price}}</p>
  <p>Usuário: {{ $procedure->user_id }}</p>

  <a href="{{ route('procedures.index') }}">Voltar</a>

  <a href="{{ route('procedures.edit', $procedure->id) }}">Editar</a>

  <form method="post" action="{{ route('procedures.destroy', $procedure->id) }}" onsubmit="return confirm('Confirma exclusão da Procedure?');" >

    @csrf
    @method('DELETE')

    <input type="submit" value="Excluir">

  </form>


</div>
</div>
</div>
</div>
</div>

@endsection

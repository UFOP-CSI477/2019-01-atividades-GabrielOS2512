@extends('layouts.app')

@section('titulo', 'Inserir Procedure')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>
                  <div class="card-body">
  <form method="post" action="{{ route('procedures.store') }}">

    @csrf

    <p>Nome: <input type="text" name="name"></p>
    <p>Preço: <input type="text" name="price"></p>
    <p>User: <select name="user_id">
      @foreach($users as $u)
        <option value="{{ $u->id }}">{{ $u->name }}</option>
      @endforeach
    </select></p>

    <input class="btn btn-success"type="submit" name="btnSalvar" value="Criar">

  </form>
</div>
</div>
</div>
</div>
</div>

@endsection

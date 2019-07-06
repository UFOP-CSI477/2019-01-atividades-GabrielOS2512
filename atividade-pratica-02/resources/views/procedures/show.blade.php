@extends('layouts.app')

@section('titulo', 'Administrador')

@section('content')

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

  <script>
      var msg = '{{Session::get('alert')}}';
      var exist = '{{Session::has('alert')}}';
      if(exist){
        alert(msg);
      }
    </script>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Menu</div>
                      <div class="card-body">

  <h2>Procedure: {{ $procedure->name }}</h1>

  <p>Código: {{ $procedure->id }}</p>
  <p>Nome: {{ $procedure->name }}</p>
  <p>Preço: {{ $procedure->price }}</p>
  <p>User: {{ $procedure->user_id }}</p>

  <a class="btn btn-primary" href="{{ route('procedures.index') }}">Voltar</a>

  <a class="btn btn-warning" href="{{ route('procedures.edit', $procedure->id) }}">Editar</a>

  <form method="post" action="{{ route('procedures.destroy', $procedure->id) }}" onsubmit="return confirm('Confirma exclusão da Procedure?');" >

    @csrf
    @method('DELETE')

    <input class="btn btn-danger" type="submit" value="Excluir">

  </form>

</div>
</div>
</div>
</div>
</div>
@endsection

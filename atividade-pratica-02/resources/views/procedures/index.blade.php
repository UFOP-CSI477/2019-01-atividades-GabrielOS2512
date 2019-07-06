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


  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Menu</div>
                    <div class="card-body">

                    <h3>Lista de Procedimentos</h3>

  <table class="table">
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>User</th>
      <th>Exibir</th>
    </tr>
  @foreach ($procedures as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->name }}</a></td>
      <td>{{ $p->price }}</td>
      <td>{{ $p->user->name }}</td>
      <td><a href="{{ route('procedures.show', $p->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>
  <a class="btn btn-success"href="{{ route('procedures.create') }}">Inserir novo Procedimento</a>

</div>
</div>
</div>
</div>
</div>

@endsection

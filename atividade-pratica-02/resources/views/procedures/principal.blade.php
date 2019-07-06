@extends('principal')

@section('titulo', 'Procedure')

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

@section('conteudo')

  <table>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Preço</th>
      <th>Exibir</th>
    </tr>
  @foreach ($procedures as $p)
    <tr>
      <td>{{ $p->id }}</td>
      <td>{{ $p->name }}</a></td>
      <td>{{ $p->price }}</td>
      <td><a href="{{ route('procedures.show', $p->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection

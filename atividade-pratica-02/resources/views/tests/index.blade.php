@extends('principal')

@section('titulo', 'Test')


@section('conteudo')

  <a href="{{ route('tests.create') }}">Inserir</a>

  <table>
    <tr>
      <th>Código</th>
      <th>Procedure</th>
      <th>User</th>
      <th>Data</th>
      <th>Exibir</th>
    </tr>
  @foreach ($tests as $t)
    <tr>
      <td>{{ $t->id }}</td>
      <td>{{ $t->procedure->name }}</td>
      <td>{{ $t->user->name }}</td>
      <td>{{ $t->date }}</a></td>
      <td><a href="{{ route('tests.show', $t->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection

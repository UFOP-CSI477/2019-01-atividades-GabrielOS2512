@extends('principal')

@section('titulo', 'Regioes')

@section('conteudo')

  <a href="{{ route('regioes.create') }}">Inserir</a>

  <table>
    <tr>
      <th>Código</th>
      <th>Nome</th>
      <th>Abreviação</th>
      <th>Visualizar</th>
    </tr>
  @foreach ($regioes as $r)
    <tr>
      <td>{{ $r->id }}</td>
      <td><a href="{{ route('regioes.show', $r->id) }}">{{ $r->nome }}</a></td>
      <td>{{ $r->abreviacao }}</td>
      <td><a href="{{ route('regioes.show', $r->id) }}">Exibir</a></td>
    </tr>
  @endforeach
  </table>

@endsection

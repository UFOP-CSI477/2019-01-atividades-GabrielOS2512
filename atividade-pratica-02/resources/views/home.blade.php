@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <h1>Bem - Vindo,  {{ Auth::user()->name }}</h1>
                    <ul>
                        <li><a href="{{route('tests.create')}}">Solicitar Exame</a></li>
                    </ul>
                    <table>
                      <tr>
                        <th>Código</th>
                        <th>Procedimento</th>
                        <th>Data</th>
                        <th>Exibir</th>
                      </tr>
                    @foreach ($tests as $t)
                      <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->procedure->name }}</a></td>
                        <td>{{ $t->date }}</td>
                        <td><a href="{{ route('tests.show', $t->id) }}">Exibir</a></td>
                      </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <h1>Bem - Vindo,  {{ Auth::user()->name }}</h1>

                    <h2> Exames Marcados </h2>
                    <table class="table">
                      <tr>
                        <th>Código</th>
                        <th>Procedimento</th>
                        <th>Usuário</th>
                        <th>Data</th>
                        <th>Preço</th>
                      </tr>
                    @foreach ($tests as $t)
                      <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->procedure->name }}</a></td>
                        <td>{{ $t->user->name }}</a></td>
                        <td>{{ $t->date }}</td>
                        <td>{{ $t->procedure->price }}</a></td>
                      </tr>
                    @endforeach
                    </table>

                    <h2> Procedimentos </h2>
                    <table class="table">
                      <tr>
                        <th>Código</th>
                        <th>Procedimento</th>
                        <th>Preço</th>
                        <th>Usuário</th>
                        <th>Editar</th>
                      </tr>
                    @foreach ($procedures as $p)
                      <tr>
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</a></td>
                        <td>{{ $p->price }}</a></td>
                        <td>{{ $p->user->name }}</a></td>
                        <td><a class="btn btn-primary" href="{{ route('pro.show', $p->id) }}">Exibir</a></td>
                      </tr>
                    @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <h1>Bem - Vindo,  {{ Auth::user()->name }}</h1>
                    <h2> Meus Exames Marcados</h2>
                    <table class="table">
                      <tr>
                        <th>Código</th>
                        <th>Procedimento</th>
                        <th>Data</th>
                      </tr>
                    @foreach ($tests as $t)
                      <tr>
                        <td>{{ $t->id }}</td>
                        <td>{{ $t->nome_p }}</a></td>
                        <td>{{ $t->data }}</td>                
                      </tr>
                    @endforeach
                    </table>

                    <br><a class="btn btn-primary" href="{{route('pacientes.create')}}">Solicitar Exame</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

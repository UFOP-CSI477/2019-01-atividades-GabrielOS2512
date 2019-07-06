@extends('layouts.app')

@section('titulo', 'Inserir Paciente')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menu</div>
                  <div class="card-body">

                    <form method="post" action="{{ route('pacientes.store') }}">

                      @csrf

                        <label for="user_id">Usuário : </label>
                        <select name="user_id">
                            <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                        </select>

                      <p>Selecione o Procedimento: <select name="procedure_id">
                        @foreach($procedures as $p)
                          <option value="{{ $p->id }}">{{ $p->name }}</option>
                        @endforeach
                      </select></p>
                      <label for="date">Data do Exame : </label>

                      <input class="form-control" type="date" name="date">
                      <br>
                      <input class="btn btn-primary" type="submit" name="btnSalvar" value="Incluir">

                    </form>
                  </div>
              </div>
          </div>
      </div>
  </div>


@endsection

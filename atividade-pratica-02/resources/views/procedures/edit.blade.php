@extends('layouts.app')

@section('titulo', 'Editar Procedure')

@section('content')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>


  <form method="post" action="{{ route('procedures.update', $procedure->id) }}">

    @csrf
    @method('PATCH')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Menu</div>
                      <div class="card-body">

                          <h3>Editar Procedimento</h3>

                            <p>Nome: <input type="text" name="name"></p>
                            <p>Preço: <input type="text" name="price"></p>
                            <p>User: <select name="user_id">
                              @foreach($user as $u)
                                <option value="{{ $u->id }}"

                                  @if ( $procedure->user_id == $u->id)
                                    selected
                                  @endif
                                  >{{ $u->name }}</option>
                              @endforeach
                            </select></p>

                            <input class="btn btn-alert"type="submit" name="btnSalvar" value="Editar">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
@endsection

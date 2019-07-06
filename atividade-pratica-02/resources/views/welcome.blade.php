<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Petshop')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Exibir mensagens -> campo: mensagem //-->
    @if( Session::has('mensagem') )
      <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif


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

                          <h1>Bem Vindo</h1>
                          <!-- Links - menu lateral //-->
                          <a class="btn btn-primary" href="/pacientes">Paciente</a>
                          <a class="btn btn-warning" href="/admin">Adminitrador</a>
                          <a class="btn btn-secondary" href="/operador">Operador</a>

                          <!-- Conteúdo - parte central //-->
                          <h3>Esses são os procedimentos disponiveis</h3>
                          <table class="table">
                            <tr>
                              <th>Código</th>
                              <th>Nome</th>
                              <th>Preço</th>
                            </tr>
                          @foreach ($procedures as $p)
                            <tr>
                              <td>{{ $p->id }}</td>
                              <td>{{ $p->name }}</a></td>
                              <td>{{ $p->price }}</td>
                            </tr>
                          @endforeach
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    @section('conteudo')


    @endsection



  </body>
</html>

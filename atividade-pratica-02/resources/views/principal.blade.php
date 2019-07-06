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


    <h1>Olá</h1>
    <!-- Links - menu lateral //-->
    <ul>
        <li><a href="/pacientes">Paciente</a></li>
        <li><a href="/admin">Administrativo</a></li>
        <li><a href="/operador">Operador</a></li>
    </ul>

    <!-- Conteúdo - parte central //-->

    @section('conteudo')


    @endsection



  </body>
</html>

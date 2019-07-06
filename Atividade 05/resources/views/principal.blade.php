<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo', 'Sistema Acadêmico')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- Exibir mensagens -> campo: mensagem //-->
    @if( Session::has('mensagem') )
      <p><strong>{{ Session::get('mensagem') }}</strong></p>
    @endif


    <!-- Links - menu lateral //-->
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/welcome">About</a></li>
        <li><a href="/alunos/listar">Listar</a></li>
        <li><a href="/estados">Estados</a></li>
        <li><a href="/regioes">Regiões</a></li>
        <li><a href="/cidade">Cidades</a></li>
        <li><a href="/alunos">Alunos</a></li>
    </ul>

    <!-- Conteúdo - parte central //-->
    @yield('conteudo')





  </body>
</html>

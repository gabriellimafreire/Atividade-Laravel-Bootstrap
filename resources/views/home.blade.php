<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" type="text/css" href="estilo.css" media="screen" /> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Bootstrap</title>

    <!-- Style -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'node_modules/bootstrap/dist/css/bootstrap.min.css', 'node_modules/bootstrap.bundle.js'])
</head>
<body style="background-color: blue;">
<!-- Inicando NAVBAR -->
<header>
<nav class="navbar navbar-expand-lg bg-body-tertiary"  style="background-color: white;">
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <div class="container-fluid">
    <a class="navbar-brand" href="#">Gabriel Freire</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" href="{{ url('/carros') }}">CARROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/motos') }}">MOTOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/contato') }}">CONTATO</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="pesquisar" placeholder="pesquisar" aria-label="Pesquisar">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
      </form> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </div>
  </div>
</nav>
</header>
<!-- Encerrando NAVBAR -->

<!-- Carrosel -->
<br><br><br><br><br>
<center>
<div class="card" style="width: 50rem;">
  <div class="card-body"><br><br>
    <h5 class="card-title">INFORMATIVO</h5><br><br>
    <h6 class="card-subtitle mb-2 text-muted">RECORDANDO O PASSADO</h6><br><br>
    <p class="card-text">OLÁ QUERIDO USUÁRIO, SEJA MUITO BEM-VINDO A ESSE SITE!</p><br>
    COMO PROPÓSITO, VISAMOS APRESENTAR PARA VOCÊ MODELOS DE AUTOMÓVEIS E MOTOCICLETAS, CUJO, SÃO CONSIDERADOS CLÁSSICOS(AS)</p><br><br>

     <div class="card" style="width: 20rem;">
  <img src="https://th.bing.com/th/id/OIP.9BUsewCpsJiBIe9KfGPS8AHaE8?w=270&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="...">
</div><br><br>
  </div>
</div>
</center>

</body>
</html>
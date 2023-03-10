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
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: white;">
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
          <a class="nav-link active" href="{{ url('/home') }}">HOME</a>
        </li>
      <li class="nav-item">
          <a class="nav-link active" href="{{ url('/carros') }}">CARROS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/motos') }}">MOTOS</a>
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

</header><br><br><br>

<!-- Encerrando NAVBAR -->

<!-- Formulário de contato -->
<center>
<div class="card" style="width: 50rem;">
  <div class="card-body">

<form class="row g-3">
      <h4>FORMULÁRIO DE CONTATO</h4>
  <div class="col-md-6">
    <label for="inputNome4" class="form-label">Nome</label>
    <input type="input" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Sobrenome</label>
    <input type="input" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Email</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="123@gmail.com">
  </div>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Estado</label>
    <select id="inputState" class="form-select">
      <option selected>Opção...</option>
      <option>PI</option><option>CE</option><option>BA</option><option>SP</option><option>RJ</option>
    </select>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mensagem</label>
  <textarea placeholder="Escreva sua mensagem aqui..." class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
</form>

</div>
</div>
</center>

</body>
</html>
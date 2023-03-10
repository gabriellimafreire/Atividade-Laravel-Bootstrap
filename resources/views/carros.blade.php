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
          <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/motos') }}">MOTOS</a>
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

</header><br>

<!-- Finalizando NAVBAR -->
    <center>
        <h1>COLEÇÃO DE CARROS<h1>
    </center>
<!-- CARD -->
<center>
<!-- row1 -->
<br><br>
 <div class="container text-center">
  <div class="row">

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://andreveiculos.com.br/blog/wp-content/uploads/2019/01/Shelby-branco.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">AC Cobra</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://motorshow.com.br/wp-content/uploads/sites/2/2019/10/2-xk120-by-lunaz-e1571053308626.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">JAGUAR XK120 </h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://lartbr.com.br/wp-content/uploads/2022/11/IMG_4459-1024x768.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ALFA ROMEO SPIDER</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
   </div>

  </div>
</div>
<!-- encerrando -->

<!-- row2 -->
<br><br>
 <div class="container text-center">
  <div class="row">

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://alemdaautoescola.files.wordpress.com/2018/11/simca_chambord_4636698318.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">SIMCA CHAMBORD</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://img.olx.com.br/images/33/333256289987668.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CJ(CIVILIAN JEPP) JEEP</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://mundofixa.com/wp-content/uploads/2023/01/1991_toyota_bandeirante.webp" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TOYOTA RAV4</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a><br>
  </div>
</div>
   </div>

  </div>
</div>
<!-- encerrando -->

<!-- row3 -->
<br><br>
 <div class="container text-center">
  <div class="row">

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://www.pastorecc.com.br/site/photos/cars/469/bg_84915839853ac1a8821bba.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CHEVROLET OPALA DIPLOMATA 1992</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a><br>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://www.pastorecc.com.br/site/photos/cars/70/bg_9419168852d913c173deb.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">GM OPLALA SS 1974</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a><br><br>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://bringatrailer.com/wp-content/uploads/2021/02/1956_chrysler_300b_16129993320cb064a6f7f52ae3f300_002_web-scaled.jpg?fit=940%2C626" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">CHRYSLER 300 LETTER SERIES</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
   </div>

  </div>
</div>
<!-- encerrando -->
</center>

</body>
</html>
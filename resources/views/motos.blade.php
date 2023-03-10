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
          <a class="nav-link active" aria-current="page" href="{{ url('/home') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/carros') }}">CARROS</a>
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
        <h1>COLEÇÃO DE MOTOS<h1>
    </center>
<!-- CARD -->
<center>
<!-- row1 -->
<br><br>
 <div class="container text-center">
  <div class="row">

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://www.canaldapeca.com.br/blog/wp-content/uploads/2017/12/Harley-Davidson-Fat-Boy-2017.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">HARLEY-DAVISON</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="http://www.minutomotor.com.br/wp-content/uploads/2021/04/Triumph-Street-Twin-TCM-7--1024x682.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TRIUMPH STREET TWIN </h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary"> Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://especiais.gazetaonline.com.br/motor/wp-content/uploads/sites/90/2019/07/Triumph-Speed-Twin-1024x683.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TRIUMPH STREET TWIN</h5>
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
  <img src="https://vivendoduasrodas.com.br/wp-content/uploads/2021/04/top-5-motos-custom-kansas-250.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">YAMAHA VIRAGO</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://www.motonline.com.br/noticia/wp-content/uploads/2021/02/Yamaha-XV-535-S-Virago-3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">YAMAHA VIRAGO 355</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://motomundosa.com.br/wp-content/uploads/2021/08/0002s_0001_2021-yamaha-xsr125-right-front-angle-street-view-closeup.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">YAMAHA XSR700</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
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
  <img src="https://www.pastorecc.com.br/site/photos/cars/410/bg_141392968530495e875f7f.JPG" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">RD 350 R</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://cdn.correiodoestado.com.br/img/social/1200/1200/dn_arquivo/NoticiaMidia/330250/1580797770316.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">TRIUMPH SCRAMBLER</h5>
    <p class="card-text">Clique para saber mais...</p>
    <a href="#" class="btn btn-primary">Verificar</a><br>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="https://th.bing.com/th/id/OIP.9BUsewCpsJiBIe9KfGPS8AHaE8?w=270&h=180&c=7&r=0&o=5&pid=1.7" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">ROYAL ENFIELD</h5>
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
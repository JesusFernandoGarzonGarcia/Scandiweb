<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
     <link rel="stylesheet" href="css/style.css">
     <script src="js/script.js"></script>
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-light bg-light sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="images/libreria.png" alt="" width="50" height="50">
    </a>

    <form class="d-flex justify-content-center">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark" type="submit">Search</button>
    </form>
    
    <ul class="nav justify-content-end">
  <li class="nav-item">
  <a class="nav-link " href="login.php" tabindex="-1" aria-disabled="true">
      <img src="images/usu.png" alt="..." width="50" height="50"></a>
  </li>
  <li class="nav-item new" id="linkcar">
    <a class="nav-link"  href="javascript:mostrarCompra()" ><img src="images/carrito.png" alt="..." width="50" height="50">
    <span class="badge bg-secondary" id="new"></span></a>
 
</li>
</ul>
  </div>

</nav>
      <ul class="nav nav-tabs justify-content-center navbar-dark bg-dark">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
      </ul>
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
 
<br><br>
<div class=" justify-content-center text-center"> <div class="btn-group btn-group-lg justify-content-center" role="group" aria-label="Basic radio toggle button group">
<?php foreach ($miConsultaGeneros as $clave => $date): ?> 
    <button type="button" class="btn btn-dark"><a class="nav-link " href= "indexGeneros.php?idG=<?= $date['id'];?>"  tabindex="-1" aria-disabled="true"><?= $date['nombre'];?></a></button>
<?php endforeach; ?>
</div>

<br>
<hr>
<div class="justify-content-center text-center">
    <br><br>
<h1>DESTACADOS</h1>
</div>
<div class="row " >
    <?php foreach ($miConsultaLibro as $clave => $valor): ?> 
      <div class="col-sm-3 center">
  <div class="card" type="submit" style="width: 18rem;">
  <img src=<?= $valor['image'];?> class="card-img-top" alt="..."  width="100" height="300">
  <div class="card-body">
    <h5 class="card-title"><?= $valor['nombre'];?></h5>
</div>
<h5 class="list-group-item text-success" ><?= $valor['costo'];?></h5>
  <div class="card-body">
  <script src="js/script.js"></script>
    <a href= "foro.php?idL=<?= $valor['id_libro'];?>"  name="idLibro" value='<?= $valor['id_libro'];?>' class="card-link">Ver</a>
  </div>
</div>
</div>
<?php endforeach; ?>
</div>
</body>
<script src="js/script.js"></script>
</html>
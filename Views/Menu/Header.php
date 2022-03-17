<?php

//echo $_SESSION["rol"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      <?php

if ($_SESSION['rol'] == 1) {
  echo '
  <a class="navbar-brand" href="#">GERENTE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
  <li class="nav-item">
        <a href="index.php?c=Users&a=index" class="nav-link active">
        <i class="nav-icon fas fa-columns"></i>
          <p>
            Gestionar Usuarios
          </p>
        </a>
        </li>';
}

if ($_SESSION['rol'] == 2) {
  echo '
  
  <a class="navbar-brand" href="#">EMPLEADO</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

  <li class="nav-item">
        <a href="index.php?c=Users&a=index" class="nav-link active">
        <i class="nav-icon fas fa-columns"></i>
          <p>
            Realizar Venta
          </p>
        </a>
        </li>';
}

else if ($_SESSION['rol'] == 3){
  echo '
  <a class="navbar-brand" href="#">Cliente</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

  <li class="nav-item">
        <a href="index.php?c=Users&a=index" class="nav-link active">
        <i class="nav-icon fas fa-columns"></i>
          <p>
            Catalogo para Clientes
          </p>
        </a>
        </li>';
}
?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Logout
          </a>
          <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="index.php?c=Login&a=logout"><?php session_destroy(); ?>Cerrar Sesion</a></li>
          </ul>
        </li>
      </ul>
    
      
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
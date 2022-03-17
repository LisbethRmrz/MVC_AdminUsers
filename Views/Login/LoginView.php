<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container-sm">
<br>
<br>
<b class="center">Iniciar sesion</b>

<form action="<?php echo 'index.php?c=Login&a=ingresar'; ?>" method="post">

Usuario:
<input class="form-control" type="text" name="correo_usuario" id="">

Contraseña
<input class="form-control" type="text" name="contraseña_usuario" id="">
<br>
<button class="btn btn-success" type="submit" >Ingresar</button>
<a href="index.php?c=Login&a=newCliente" class="btn" style="background-color: #EA899A">Registrarse</a>
</form>
</div>   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
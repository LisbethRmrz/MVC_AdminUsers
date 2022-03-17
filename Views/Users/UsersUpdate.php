<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="container">
			
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=Users&a=update" autocomplete="off">
				
				<input type="hidden" id="id_usuario" name="id_usuario" value="<?php echo $data["id_usuario"]; ?>" />
				
				<div class="form-group">
					<label for="nombre_usuario">Nombre</label>
					<input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" value="<?php echo $data["usuarios"]["nombre_usuario"]?>" />
				</div>
				
				<div class="form-group">
					<label for="apellido_usuario">Apellido</label>
					<input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario" value="<?php echo $data["usuarios"]["apellido_usuario"]?>" />
				</div>
				
				<div class="form-group">
					<label for="id_cargoUsuario">Cargo</label>
					<!--input type="text" class="form-control" id="id_cargoUsuario" name="id_cargoUsuario" value="<?php //echo $data["usuarios"]["id_cargoUsuario"]?>" /-->
					<select name="id_cargoUsuario" id="id_cargoUsuario">
						<?php	
						foreach($datos["usuarios"] as $dato){
							echo "<option value=".$dato["id_cargo"].">".$dato["nombre_cargo"]."</option>";
						}
						?>
					</select>
				</div>
				
				<div class="form-group">
					<label for="correo_usuario">Correo</label>
					<input type="text" class="form-control" id="correo_usuario" name="correo_usuario" value="<?php echo $data["usuarios"]["correo_usuario"]?>" />
				</div>
				
				<div class="form-group">
					<label for="contraseña_usuario">Contraseña</label>
					<input type="text" class="form-control" id="contraseña_usuario" name="contraseña_usuario" value="<?php echo $data["usuarios"]["contraseña_usuario"]?>" />
				</div>

                <div class="form-group">
					<label for="direccion_usuario">Dirección</label>
					<input type="text" class="form-control" id="direccion_usuario" name="direccion_usuario" value="<?php echo $data["usuarios"]["direccion_usuario"]?>" />
				</div>

                <div class="form-group">
					<label for="telefono_usuario">Telefono</label>
					<input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" value="<?php echo $data["usuarios"]["telefono_usuario"]?>" />
				</div>
				<div class="pt-3">
				<button id="guardar" name="guardar" type="submit" class="btn" style="background-color: #EA899A">Guardar</button>
				</div>

			</form>
			<hr>
			<a href="index.php?c=Users&a=index"> Regresar </a>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
		</body>
	</html>		
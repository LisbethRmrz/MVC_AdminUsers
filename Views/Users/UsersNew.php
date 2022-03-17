<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $data["titulo"]; ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	</head>
	
	<body>
		<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=Users&a=saveUsers" autocomplete="off">
				<div class="form-group">
					<label for="nombre_usuario">Nombre</label>
					<input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" />
				</div>
				
				<div class="form-group">
					<label for="apellido_usuario">Apellido</label>
					<input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario" />
				</div>
				
				<div class="form-group">
					<label for="id_cargoUsuario">Cargo</label>
					<select name="id_cargoUsuario" id="id_cargoUsuario">
						<?php	
						foreach($datos["usuarios"] as $dato){
							echo "<option value=".$dato["id_cargo"].">".$dato["nombre_cargo"]."</option>";
						}
						?>
					</select>
					<!--input type="text" class="form-control" id="id_cargoUsuario" name="id_cargoUsuario" /-->
				</div>
				
				<div class="form-group">
					<label for="correo_usuario">Correo</label>
					<input type="text" class="form-control" id="correo_usuario" name="correo_usuario" />
				</div>
				
				<div class="form-group">
					<label for="contraseña_usuario">Contraeña</label>
					<input type="text" class="form-control" id="contraseña_usuario" name="contraseña_usuario" />
				</div>

                <div class="form-group">
					<label for="direccion_usuario">Direccion</label>
					<input type="text" class="form-control" id="direccion_usuario" name="direccion_usuario" />
				</div>

                <div class="form-group">
					<label for="telefono_usuario">Telefono</label>
					<input type="text" class="form-control" id="telefono_usuario" name="telefono_usuario" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn mt-3" style="background-color: #EA899A">Guardar</button>
				
			</form>
			<hr>
			<a href="index.php?c=Users&a=index"> Regresar </a>
		</div>
		
			
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>

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
			
			<a href="index.php?c=Users&a=new" class="btn" style="background-color: #EA899A">Agregar</a>
			
			<hr>
			<div class="table-responsive">
				<table class="table">
					<thead>
						<tr class="table table-danger" style="background-color: #EA899A">
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Rol</th>
							<th>Correo</th>
							<th>Contraseña</th>
							<th>Direccion</th>
							<th>Telefono</th>
							<th>Editar</th>
							<th>Eliminar</th>
						</tr>
					</thead>
					
					<tbody>
						<?php foreach($data["usuarios"] as $dato) {
							echo "<tr>";
							echo "<td>".$dato["nombre_usuario"]."</td>";
							echo "<td>".$dato["apellido_usuario"]."</td>";
							echo "<td>".$dato["nombre_cargo"]."</td>";
							echo "<td>".$dato["correo_usuario"]."</td>";
							echo "<td>".$dato["contraseña_usuario"]."</td>";
							echo "<td>".$dato["direccion_usuario"]."</td>";
							echo "<td>".$dato["telefono_usuario"]."</td>";
							echo "<td><a href='index.php?c=Users&a=updateUser&id=".$dato["id_usuario"]."' class='btn' style='background-color: #EA899A'>Modificar</a></td>";
							echo "<td><a href='index.php?c=Users&a=delete&id=".$dato["id_usuario"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
			<hr>
			<a href="index.php">Regresar al Login</a>
		</div>
		
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
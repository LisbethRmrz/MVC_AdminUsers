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
			
			<a href="index.php?c=Users&a=new" class="btn btn-primary">Agregar</a>
			
			<br />
			<br />
			<div class="table-responsive">
				<table border="1" width="80%" class="table">
					<thead>
						<tr class="table-primary">
							<th>Nombre</th>
							<th>Apellido</th>
							<th>Cargo</th>
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
							echo "<td>".$dato["id_cargoUsuario"]."</td>";
							echo "<td>".$dato["correo_usuario"]."</td>";
							echo "<td>".$dato["contraseña_usuario"]."</td>";
							echo "<td>".$dato["direccion_usuario"]."</td>";
							echo "<td>".$dato["telefono_usuario"]."</td>";
							echo "<td><a href='index.php?c=Users&a=updateUser&id=".$dato["id_usuario"]."' class='btn btn-warning'>Modificar</a></td>";
							echo "<td><a href='index.php?c=Users&a=delete&id=".$dato["id_usuario"]."' class='btn btn-danger'>Eliminar</a></td>";
							echo "</tr>";
						}
						?>
					</tbody>
					
				</table>
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>
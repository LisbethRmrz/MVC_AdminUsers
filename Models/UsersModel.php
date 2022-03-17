<?php
	
	class UsersModel {
		
		private $db;
		private $usuarios;
		private $cargos;
		
		public function __construct(){
			$this->db = Conect::conection();
			$this->usuarios = array();
		}
		
		public function getUsuarios()
		{
			//$sql = "SELECT * FROM usuarios";
			$sql = "SELECT u.id_usuario, u.nombre_usuario, u.apellido_usuario, u.correo_usuario, u.contraseña_usuario, u.direccion_usuario, u.telefono_usuario, c.nombre_cargo from usuarios u inner join cargos c On c.id_cargo = u.id_cargoUsuario";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->usuarios[] = $row;
			}
			return $this->usuarios;
		}

		public function getCargos()
		{
			$sql = "SELECT * FROM cargos";
			$resultadoC = $this->db->query($sql);
			while($row = $resultadoC->fetch_assoc())
			{
				$this->cargos[] = $row;
			}
			return $this->cargos;
		}
		
		public function insertUsers($nombre, $apellido, $cargo, $correo, $contraseña, $direccion, $telefono){
			
			$resultado = $this->db->query("INSERT INTO usuarios (nombre_usuario, apellido_usuario, id_cargoUsuario, correo_usuario, contraseña_usuario, direccion_usuario, telefono_usuario) VALUES ('$nombre', '$apellido', '$cargo', '$correo', '$contraseña', '$direccion', '$telefono')");
			
		}
		
		public function updateUsers($id, $nombre, $apellido, $cargo, $correo, $contraseña, $direccion, $telefono){
			
			$resultado = $this->db->query("UPDATE usuarios SET nombre_usuario='$nombre', apellido_usuario='$apellido', id_cargoUsuario='$cargo', correo_usuario='$correo', contraseña_usuario='$contraseña', direccion_usuario='$direccion', telefono_usuario='$telefono' WHERE id_usuario = '$id'");			
		}
		
		public function deleteUsers($id){
			
			$resultado = $this->db->query("DELETE FROM usuarios WHERE id_usuario = '$id'");
			
		}
		
		public function getUsers($id)
		{
			$sql = "SELECT * FROM usuarios WHERE id_usuario='$id' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>
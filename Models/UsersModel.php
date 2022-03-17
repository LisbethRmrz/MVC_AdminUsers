<?php
	
	class UsersModel {
		
		private $db;
		private $usuarios;
		
		public function __construct(){
			$this->db = Conect::conection();
			$this->usuarios = array();
		}
		
		public function getUsuarios()
		{
			$sql = "SELECT * FROM usuarios";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->usuarios[] = $row;
			}
			return $this->usuarios;
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
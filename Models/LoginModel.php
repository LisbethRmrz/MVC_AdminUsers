<?php

class ConectL {
		
	public static function conection(){
		
		$conn = new mysqli("localhost", "lisbeth", "123456", "admin_users");
		return $conn;
		
	}
}

class LoginModel{

    private $db;
	private $usuarios;
	private $correo;
	private $contraseña;
		
		public function __construct(){
			$this->db = ConectL::conection();
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

		public function getCorreo($correo){
			$sqlSelect = "SELECT correo_usuario FROM usuarios WHERE correo_usuario = '$correo'";
			$result = $this->db->query($sqlSelect);
				
			while($rowDatos = $result->fetch_assoc())
			{
				$this->usuariosCorreo = $rowDatos;
			}
			return $this->usuariosCorreo;

			//print_r($this->usuariosCorreo['correo_usuario']);
		}

		public function getContraseña($correo, $contraseña){
			$sqlSelect = "SELECT contraseña_usuario FROM usuarios WHERE correo_usuario = '$correo'";
			$result = $this->db->query($sqlSelect);
				
			while($rowDatos = $result->fetch_assoc())
			{
				$this->usuariosContraseña = $rowDatos;
			}
			return $this->usuariosContraseña;

			//print_r($this->usuariosCorreo['correo_usuario']);
		}

		public function getCargo($correo){
			$sqlSelect = "SELECT id_cargoUsuario FROM usuarios WHERE correo_usuario = '$correo'";
			$result = $this->db->query($sqlSelect);
				
			while($rowDatos = $result->fetch_assoc())
			{
				$this->usuariosCargo = $rowDatos;
			}
			return $this->usuariosCargo;

			//print_r($this->usuariosCorreo['correo_usuario']);
		}

}

/*$instance = new LoginModel();
$res = $instance->getContraseña("lisbethrmrz98@gmail.com","123456");
print_r($res);*/


?>
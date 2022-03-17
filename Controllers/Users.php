<?php
	
	class UsersController {
		
		public function __construct(){
			require_once "Models/UsersModel.php";
		}
		
		public function index(){
			$usuarios = new UsersModel();
			$data["titulo"] = "Usuarios";
			$data["usuarios"] = $usuarios->getUsuarios();
			require_once "Views/Users/UsersView.php";	
		}
		
		public function new(){
			$usuarios = new UsersModel();
			$data["titulo"] = "Usuarios";
			$datos["usuarios"] = $usuarios->getCargos();
            require_once "Views/Users/UsersNew.php";
		}
		
		public function saveUsers(){
			
			$nombre = $_POST['nombre_usuario'];
			$apellido = $_POST['apellido_usuario'];
            //$cargo = $_POST['id_cargoUsuario'];
			$cargo=(isset($_POST['id_cargoUsuario'])) ? $_POST['id_cargoUsuario'] : 3;
            $correo = $_POST['correo_usuario'];
            $contraseña = $_POST['contraseña_usuario'];
            $direccion = $_POST['direccion_usuario'];
            $telefono = $_POST['telefono_usuario'];
			
			$usuarios = new UsersModel();
			$usuarios->insertUsers($nombre, $apellido, $cargo, $correo, $contraseña, $direccion, $telefono);
			$data["titulo"] = "Usuarios";
			$this->index();
		}
		
		public function updateUser($id){
			
			$usuarios = new UsersModel();
			$data["id_usuario"] = $id;
			$data["usuarios"] = $usuarios->getUsers($id);
			$data["titulo"] = "Usuarios Actualizar";
			$datos["usuarios"] = $usuarios->getCargos();
			require_once "Views/Users/UsersUpdate.php";
		}
		
		public function update(){

			$id = $_POST['id_usuario'];
			$nombre = $_POST['nombre_usuario'];
			$apellido = $_POST['apellido_usuario'];
            //$cargo = $_POST['id_cargoUsuario'];
			$cargo=(isset($_POST['id_cargoUsuario'])) ? $_POST['id_cargoUsuario'] : 3;
            $correo = $_POST['correo_usuario'];
            $contraseña = $_POST['contraseña_usuario'];
            $direccion = $_POST['direccion_usuario'];
            $telefono = $_POST['telefono_usuario'];

			$usuarios = new UsersModel();
			$usuarios->updateUsers($id, $nombre, $apellido, $cargo, $correo, $contraseña, $direccion, $telefono);
			$data["titulo"] = "usuarios";
			$this->index();
		}
		
		public function delete($id){
			
			$usuarios = new UsersModel();
			$usuarios->deleteUsers($id);
			$data["titulo"] = "usuarios";
			$this->index();
		}	
	}
?>
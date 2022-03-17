<?php

class LoginController{

    public function __construct(){
        require_once "Models/LoginModel.php";
    }

    public function index(){
			
        $usuarios = new LoginModel();
        $data["titulo"] = "Usuarios";
        $data["usuarios"] = $usuarios->getUsuarios();
        
        //print_r($data["usuarios"]);

        require_once "Views/Login/LoginView.php";	
    }

    public function users(){

        $usuarios = new LoginModel();
        $data["titulo"] = "Bienvenida";
        $data["usuarios"] = $usuarios->getUsuarios();
        require_once "Views/Login/LoginWelcome.php";
            
    }

    public function ingresar(){

        $correo = $_POST['correo_usuario'];
        $contraseña = $_POST['contraseña_usuario'];

        $usuario = new LoginModel();
        $data["usuario"] = $usuario->getUsuarios();

        $separatingCorreo = $usuario->getCorreo($correo);
        $separatingContraseña = $usuario->getContraseña($correo, $contraseña);
        $separatingCargo = $usuario->getCargo($correo);
        foreach($separatingCorreo as $index => $value){
            $correo_usuario = $value;
        }
        foreach($separatingContraseña as $indexPwd => $valuePwd){
            $contraseña_usuario = $valuePwd;
        }

        foreach($separatingCargo as $indexCargo => $valueCargo){
            $cargo_usuario = $valueCargo;
        }

        foreach ($data["usuario"] as $dato){
            $idUsuario = $dato['id_usuario'];
            $idCargoUsuario = $dato['id_cargoUsuario'];
            $correoUsuario = $dato['correo_usuario'];
            $contraseñaUsuario = $dato['contraseña_usuario'];
            //echo $correoUsuario;
            //echo $contraseñaUsuario;
            
        }

        if(($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 1)){
            //session_start();
            echo "Usted es un gerente";
            $this->users();
        }

        else if(($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 2)){
            echo "Usted es un Empleado";
            $this->users();
        }

        else if(($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 3)){
            echo "Usted es un Cliente";
            $this->users();
        }

        else{
        echo "error, vamos mal";
        //echo $contraseña_usuario;
        }

        

    }

}

?>
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

    public function menuBienvenidaG($rol){
        $usuarios = new LoginModel();
        require_once "Views/Menu/Header.php";
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

        if(!empty($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 1)){
            session_start();
            $_SESSION["rol"]=1;
            $this->menuBienvenidaG($cargo_usuario);
        }

        else if(!empty($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 2)){
            //echo "Usted es un Empleado";
            session_start();
            $_SESSION["rol"]=2;
            $this->menuBienvenidaG($cargo_usuario);
        }

        else if(!empty($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 3)){
            echo "Usted es un Cliente";
            $this->menuBienvenida($cargo_usuario);
        }

        else{
        echo "error, vamos mal";
        //echo $contraseña_usuario;
        }   

    }

    public function logout(){
        //session_destroy();
        require_once "Views/Login/LoginView.php";
    }

}

?>
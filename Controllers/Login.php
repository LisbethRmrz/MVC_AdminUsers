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

        $Msgerror = "Campo correo vacio";
        $correo=(isset($_POST['correo_usuario'])) ? $_POST['correo_usuario'] : $Msgerror;
        $contraseña=(isset($_POST['contraseña_usuario'])) ? $_POST['contraseña_usuario'] : $Msgerror;
        //$contraseña = $_POST['contraseña_usuario'];

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

        if(!empty($correo == $correo_usuario) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 1)){
            session_start();
            $session1 = $_SESSION["rol"]=1;
            $this->menuBienvenidaG($cargo_usuario);
        }

        else if(!empty($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 2)){
            //echo "Usted es un Empleado";
            session_start();
            $session2 = $_SESSION["rol"]=2;
            $this->menuBienvenidaG($cargo_usuario);
        }

        else if(!empty($correo_usuario == $correo) && ($contraseña_usuario == $contraseña) && ($cargo_usuario == 3)){
            $session3 = $_SESSION["rol"]=3;
            $this->menuBienvenidaG($cargo_usuario);
        }

        else{
        echo "Error al iniciar sesión";
        //echo $contraseña_usuario;
        }  

    }

    public function logout(){

        require_once "Views/Login/LoginView.php";
    }

    public function saveCliente(){
        //$nombre = (isset($_POST['nombre_usuario'])?$_POST['nombre_usuario']:"default");
        $nombre = $_POST['nombre_usuario'];
        $apellido = $_POST['apellido_usuario'];
        $cargo=  3;
        $correo = $_POST['correo_usuario'];
        $contraseña = $_POST['contraseña_usuario'];
        $direccion = $_POST['direccion_usuario'];
        $telefono = $_POST['telefono_usuario'];
        $usuariosC = new LoginModel();
        $usuariosC->insertUsers($nombre, $apellido, $cargo, $correo, $contraseña, $direccion, $telefono);
        /* Envío De Email Con Token - pendiente */
        $data["titulo"] = "Registrarse";
        $this->index();
    }

    public function newCliente(){
        require_once "Views/Login/RegisterCliente.php";
    }

}

?>
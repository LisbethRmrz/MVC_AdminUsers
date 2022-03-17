<?php
	
	class Conect {
		
		public static function conection(){

			// Formato conexion: servidor donde se aloja la bd, usuario, contraseña, base de datos
			$conn = new mysqli("localhost", "lisbeth", "123456", "admin_users");
			return $conn;
			
		}
	}
?>
<?php
	
	class Conect {
		
		public static function conection(){
			
			$conn = new mysqli("localhost", "lisbeth", "123456", "admin_users");
			return $conn;
			
		}
	}
?>
<?php
	
	class Conect {
		
		public static function conection(){
			
			$conn = new mysqli("localhost", "lisbeth", "123456", "admin_users");
			//$conn = new mysqli("sql310.epizy.com", "epiz_31312474", "kyr96UpAxJl3UoM", "epiz_31312474_admin_users");
			return $conn;
			
		}
	}
?>
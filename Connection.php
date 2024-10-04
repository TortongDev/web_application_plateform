<?php

class Connection {
	public $hostname = "localhost";
	public $username = "tortongdev";
	public $password = "Tortong@1997";
	public $database = "db_shop_bus";
	public $db = null;
	public function __construct(){
		try{
			$connect = new PDO("mysql:host=$this->hostname;dbname=$this->database;",$this->username, $this->password);
			$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->db = $connect;
		}catch(PDOException $err){
			echo $err->getMessage();
		}
	}
}


?>

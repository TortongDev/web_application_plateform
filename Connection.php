<?php

class Connection {
	public $hostname = "localhost";
	public $username = "root";
	public $password = "Tortong@1997";
	public $database = "test_database";
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

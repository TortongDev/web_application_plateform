<?php

	require_once "./Connection.php";
	$con = new connection();
	$stmt = $con->db->prepare("insert into chache_data (data, data_desc, avatar) values(?, ?, ?)");
	$stmt->execute(['','','']);
	
	exit;
?>

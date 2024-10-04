<?php

	require_once "./Connection.php";
	$con = new connection();

	$data1 = "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley";
	$data2 = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley";
	$data3 = "picture-avatar.jpg";
	for ($i = 0; $i <= 30000; $i++):
		$stmt = $con->db->prepare("insert into chache_data (data, data_desc, avatar) values(?, ?, ?)");
		$stmt->execute([$data1."=>".$i,$data2,$data3]);
		$i++;
	endfor;
	exit;
?>

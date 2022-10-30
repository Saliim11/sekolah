<?php

	// koneksi ke database
	include "connect.php";
	$con = mysqli_connect (HOST, USER, PASSWORD, DATABASE);
	
	$response = array();
	
	// menjalankan query
	$sql = "SELECT * FROM `tb_guru`";
	$result = mysqli_query($con, $sql);

	foreach($result as $key => $value){
		array_push($response, $value);
	}

	print(json_encode($response));
?>

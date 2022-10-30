<?php
	include "connect.php";
	$con = mysqli_connect (HOST, USER, PASSWORD, DATABASE);
	$response = array();
	//variables
	$nama_user = $_POST ["nama_user"];
	$vsusername = $_POST ["vsusername"];
	$vspassword = md5($_POST ["vspassword"]);
	//query
	$sql = "INSERT INTO users(id_user, nama_user, vsusername, vspassword)  
	VALUES(UUID(), '$nama_user', '$vsusername', '$vspassword')";
//UUID for ID values
	$result = mysqli_query($con, $sql);
	//if else condition
	if ($result) 
	{
		$resp["status"] = "1";
		$resp["message"] = "sukses";
		$resp["nama_user"] = $nama_user;
		$resp["vsusername"] = $vsusername;
		$resp["vspassword"] = $vspassword;
		
	}else
	{
		$resp["status"] = "0";
		$resp["message"] = "gagal";
	}
	$response = $resp;
	echo json_encode ($response);

	mysqli_close ($con);
?>

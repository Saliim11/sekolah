<?php
	include "connect.php";
	$con = mysqli_connect (HOST, USER, PASSWORD, DATABASE);
	$response = array();
//variables
	$nama_guru = $_POST ["nama_guru"];
	$kelas = $_POST ["kelas"];

	$sql = "INSERT INTO tb_guru(id_guru, nama_guru, kelas) 
	VALUES(UUID(), '$nama_guru', '$kelas')";

	$result = mysqli_query($con, $sql);

// else if condition
	if ($result) 
	{
		$resp["status"] = "1";
		$resp["message"] = "sukses";
		$resp["nama_guru"] = $nama_guru;
		$resp["kelas"] = $kelas;
	}else
	{
		$resp["status"] = "0";
		$resp["message"] = "gagal";
	}
	$response = $resp;
	echo json_encode ($response);

	mysqli_close ($con);
?>

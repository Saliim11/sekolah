<?php
	//menghubungkan database
	include "connect.php";
	$con = mysqli_connect (HOST, USER, PASSWORD, DATABASE);
	$response = array();
	
	//mengambil data dari form
	$nama_siswa = $_POST ["nama_siswa"];
	$kelas = $_POST ["kelas"];

	$sql = "INSERT INTO tb_siswa(id_siswa, nama_siswa, kelas) 
	VALUES(UUID(), '$nama_siswa', '$kelas')";

	$result = mysqli_query($con, $sql);

	if ($result) 
	{
		$resp["status"] = "1";
		$resp["message"] = "sukses";
		$resp["nama_guru"] = $nama_siswa;
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

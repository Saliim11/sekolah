<?php
// menghubungkan ke database
include "connect.php";
$con = mysqli_connect (HOST, USER, PASSWORD, DATABASE);

// mengambil data id guru
$id = $_GET ['id_guru'];

// query hapus data guru
$sql = "DELETE from tb_guru WHERE id_guru = '$id'";

$result = mysqli_query($con,$sql);

$response = array();

//if else condition
if($result) {
	$resp["status"] = 1;
	$resp["message"] = "hapus sukses";
}else{
	$resp["status"] = 0;
	$resp["message"] = "hapus gagal";
}

$response = $resp;
echo json_encode($response);
mysqli_close($con);
?>

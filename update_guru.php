<?php
include "connect.php";
$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

$response = array ();

$id = $_GET['id_guru'];
$nama_guru = $_GET['nama_guru'];
$kelas = $_GET['kelas'];
$id_kelas = $_GET['id_kelas'];

$sql = "UPDATE tb_guru SET nama_guru = '$nama_guru', kelas = '$kelas' WHERE id_guru = '$id'";

$result = mysqli_query($con, $sql);

if($result) {
	$resp["status"]="1";
	$resp["message"]="update sukses";
	$resp["nama_guru"]=$nama_guru;
	$resp["kelas"]= $kelas;
}else{
	$resp["status"]="0";
	$resp["message"]="update gagal";
}

$response = $resp;
echo json_encode($response);

mysqli_close($con);
?>
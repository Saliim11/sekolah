<?php
include "connect.php";
$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

$response = array ();

$id = $_GET['id_siswa'];
$nama_siswa = $_GET['nama_siswa'];
$kelas = $_GET['kelas'];
//variables

$sql = "UPDATE tb_siswa SET nama_siswa = '$nama_siswa', kelas = '$kelas' WHERE id_siswa = '$id'";
//query

$result = mysqli_query($con, $sql);

if($result) {
	$resp["status"]="1";
	$resp["message"]="update sukses";
	$resp["nama_guru"]=$nama_siswa;
	$resp["kelas"]= $kelas;
}else{
	$resp["status"]="0";
	$resp["message"]="update gagal";
}
//if else condition

$response = $resp;
echo json_encode($response);

mysqli_close($con);
?>

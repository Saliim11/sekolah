<?php
include "connect.php";
$con = mysqli_connect (HOST, USER, PASSWORD, DATABASE);

$response = array();
//QUERY
$sql = "SELECT * FROM `tb_siswa`";
//assigning
$result = mysqli_query($con, $sql);

foreach($result as $key => $value){
	array_push($response, $value);
}
//print
print(json_encode($response));
?>

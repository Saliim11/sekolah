<?php
include "connect.php";
$con = mysqli_connect (HOST, USER, PASSWORD, DATABASE);

$response = array();

$sql = "SELECT * FROM `tb_guru`";

$result = mysqli_query($con, $sql);

foreach($result as $key => $value){
	array_push($response, $value);
}

print(json_encode($response));
?>
<?php
	// Untuk menghubungkan ke database
	include "connect.php";
	$con = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
	
	$response = array ();
	
	// menampung nilai username dan password dari form
	$username = $_POST['vsusername'];
	$password = md5($_POST['vspassword']);
	
	// query cek username dan password
	$sql = "SELECT * FROM users WHERE vsusername = '$username' and vspassword = '$password'";
	$result = mysqli_query($con, $sql);
	
	if (!$result) {
		echo "query gagal: " . mysqli_error($con);
		exit;
	}
	
	$row = mysqli_fetch_row($result);
	//row
	$result_data = array(
		'id_user' => $row[0],
		'nama_user' => $row[1],
		'vsusername' => $row[2],
		'vspassword' => $row[3]);
		
	if(mysqli_num_rows($result) > 0){
		$response['result'] = "1";
		$response['message'] = "Berhasil Login";
		$response['user'] = $result_data;
		
	}else{
		$response['result'] = "0";
		$response['message'] = "Gagal Login";
		}
	//if else condition
	echo json_encode($response);

?>

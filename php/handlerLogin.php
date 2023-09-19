<?php
session_start();
	$email = $_POST['email'];
	$pass = $_POST['pass'];

	$mysqli = new mysqli('127.0.0.1', 'root', '', 'studybase');
	$result = $mysqli->query(" SELECt * FROM users WHERE email = '$email'");
	if($result->num_rows){
		$user = $result->fetch_assoc();
		$passHash = $user['pass'];
		if(password_verify($pass, $passHash)){
			$_SESSION['name'] = $user['name'];
			$_SESSION['lastname'] = $user['lastname'];
			header("Location: /profile.php");
		}else{
			echo 'login error';
		}
	}else{
		echo 'login error';
	}
?>
<?php

	session_start();
	$con = mysqli_connect('localhost','root');

	mysqli_select_db($con,'2fa');

	$username = $_POST['user'];
	$password = $_POST['pass'];

	$check = "select * from quizregistration where username ='$username' && password ='$password'";
	$resultcheck = mysqli_query($con,$check);	

	$row = mysqli_num_rows($resultcheck);
		if($row == 1){
			echo "You are already signed up!";
			include 'location:index.php';
		}	
		else{
			$q = "insert into registration(username, password) values ('$username', '$password')";
			$result = mysqli_query($con,$q);
			header('location:question.php');
		}

?>



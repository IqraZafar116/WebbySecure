<?php
session_start();


$con = mysqli_connect('localhost','root');
mysqli_select_db($con,'2fa');

$username = $_POST['user'];
$password = $_POST['pass'];

$sql = " SELECT id FROM `registration` WHERE username = '$username' && password ='$password' ";

$Result = mysqli_query($con,$sql);

$row = mysqli_num_rows($Result);

if($row == 1){
	$_SESSION['username']=$_POST['user'];
	$_SESSION['password']=$_POST['pass'];
	header('location:Verify.php');	
}
else{
	header('location:index.php');
}

?>
<?php  
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'2fa');
    $ans = $_POST['ans'];
    $ans1 = md5($ans);
    $username = $_POST['user'];
    $password = $_POST['pass'];
    $sql = " SELECT id FROM `registration` WHERE username = '$username' && password ='$password' ";
    $Result = mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($Result);
    $id=$row['id'];
    $sql1 = "SELECT answer FROM `squest` WHERE id = '$id'";
    $result1 = mysqli_query($con,$sql1);
    $row=mysqli_fetch_assoc($result1);
    $sql2=$row['answer'];
    if ($ans1 == $sql2){
        include 'welcome.php';
    }
    else{
        include 'verify.php';
        echo("The Name you entered is incorrect!");
    }
?>
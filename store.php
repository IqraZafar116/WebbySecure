<?php
    session_start();   
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con,'2fa');
    $ans = $_POST['ans'];
    $ans1 = md5($ans);
    if($sql = "insert into squest(answer) value ('$ans1')"){
        $result = mysqli_query($con,$sql);
        echo("Signed up Successfully!");
        session_destroy();
        include 'index.php';
    }
    
?>
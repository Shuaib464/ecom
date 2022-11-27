<?php
    session_start();
    header('Location:index.html');
    echo "Successfully Logged In"; 
    $con = mysqli_connect('localhost','root');
    if($con){
        echo "connection successfully";
    }
    else{
        echo "no  connection";
    }
    mysqli_select_db($con,'vavy');
    $name = $_POST['email'];
    $pass = $_POST['password'];

    $quer = "Select * from userdata where username = '$name' && password = '$pass'";
    $result = mysqli_query($con, $quer);
    $num = mysqli_num_rows($result);
    if($num==1){
        $_SESSION['username']=$name;
        header('location:index.html');
    }
    else{
        header('location:login.html');
    }
?>
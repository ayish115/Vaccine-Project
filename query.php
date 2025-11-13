<?php
include 'conection.php';

if (isset($_REQUEST['btnregister'])) {
    $name = $_REQUEST['username'];
    $email = $_REQUEST['useremail'];
    $password = $_REQUEST['userpassword'];
    $roll = $_REQUEST['userroll'];
    $savequery = "INSERT INTO `regiter`(`Name`, `Email`, `Password`, `Role`) VALUES ('$name' , '$email' , '$password' , '$roll')";
    $res = mysqli_query($con , $savequery);
    if($res['$name , $email , $password , $roll'] != null ){
    header("location: home.php?msg=Your Account Has Been Successfully Registered now sing-in Yourself.");
    }
    else{
        header("location: home.php");
    }
}
?>

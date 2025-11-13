<?php
include "conection.php";

if (isset($_REQUEST['apbtn'])) {
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $email = $_REQUEST['email'];
    $number = $_REQUEST['number'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $vaccine = $_REQUEST['vaccine'];
    $hospital = $_REQUEST['hospital'];
    $address = $_REQUEST['address'];
    $newquery = "INSERT INTO `appform`(`Name`, `age`, `Email`, `Number`, `date`, `time`, `vaccine`, `hospital`, `address`) VALUES ('$name', '$age','$email', '$number', '$date', '$time', '$vaccine', '$hospital', '$address')";
    $res = mysqli_query($con, $newquery);
    if (!empty($res)) {
        header("location: index.php");
    } else {
        header("location: app.php");
    }
}
?>
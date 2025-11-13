<?php
include 'conection.php';

if (isset($_REQUEST['logbtn'])) {
    $email = $_REQUEST['logmail'];
    $pass = $_REQUEST['logpass'];

    $checkquery = "SELECT * FROM `regiter` WHERE `Email` = '$email' AND `Password` ='$pass'";
    $data = mysqli_query($con, $checkquery);
    $row = mysqli_fetch_assoc($data);
    if ($row['Email'] == $email && $row['Password'] == $pass) {
        if ($row['Role'] == "admin") {
            session_start();
            $_SESSION['Adname'] = $row['Name'];
            $_SESSION['Ademail'] = $row['Email'];
            $_SESSION['Adrole'] = $row['Role'];
            header("location: Admin.php");
        } elseif ($row['Role'] == "parents") {
            session_start();
            $_SESSION['Pname'] = $row['Name'];
            $_SESSION['Pemail'] = $row['Email'];
            $_SESSION['Prole'] = $row['Role'];
            header("location: index.php");
        }
    } else {
        header("location: home.php");
    }
}
?>

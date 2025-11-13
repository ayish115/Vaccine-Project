<?php
include "conection.php";
if(isset($_GET['dltid']) == true){
    $id = $_GET['dltid'];
    $savequery = "DELETE FROM `regiter` WHERE `Id` = $id";
    // print_r($savequery); exit();
    $result = mysqli_query($con,$savequery);
    if(!empty($result)){
        header("location: show.php?dltmsg= Data Dlt Successfully");
    }
}
?>
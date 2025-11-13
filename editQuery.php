<?php
include 'conection.php';
if (isset($_REQUEST['updatebtn'])) {
    $id = $_REQUEST['id'];
    if (isset($_REQUEST['updatestatus']) == true) {
        $check = $_REQUEST['updatestatus'];
        if ($check == 0) {
            $name = $_REQUEST['username'];
            $email = $_REQUEST['useremail'];
            $password = $_REQUEST['userpassword'];
            $roll = $_REQUEST['userroll'];
            $updatequery = "UPDATE `regiter` SET `Name`='$name',`Email`='$email',`Password`='$password',`Role`='$roll',`updatestatus`='1' WHERE `Id`= $id";
            mysqli_query($con, $updatequery);
            mysqli_close($con);
            header("location: show.php");
        }
        else{
            header("location: show.php");
        }
    }
}
?>
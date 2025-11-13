<?php
session_start();
session_destroy();
unset($_SESSION['pname']);
unset($_SESSION['pemail']);
unset($_SESSION['prole']);
header("location: index.php")
?>

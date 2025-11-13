<?php
session_start();
if(isset($_SESSION['Hemail']) == "")
{
    header("location: home.php");
}
else{
?>
<h1>
<?php echo $_SESSION['Hname'];?> <br>
<?php echo $_SESSION['Hemail'];?> <br>
<?php echo $_SESSION['Hrole'];?> 
</h1>
<a href="logout.php">Logout</a>
<?php } ?>   
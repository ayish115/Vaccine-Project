<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION['Ademail']) == "")
{
    header("location: home.php");
}
else{
?>
<div class="container bg-danger text-center">
<h1 class="text-white">
Hello <?php echo $_SESSION['Adname'];?> <br>
<h4 class="text-white">chosse what you do</h4>
</h1>
</div>
<a href="logout.php" class="btn btn-primary">Logout</a>
<br>
<br>
<a href="app.php" class="btn btn-primary">Appointment</a>
<br>
<br>
<a href="showapp.php" class="btn btn-primary">Show Appointment</a>
<br>
<br>
<a href="show.php" class="btn btn-primary">see users</a>
<br>
<br>
<?php } if(isset($_SESSION['Ademail'])){ ?>
<a href="index.php" class="btn btn-primary">visit website</a>
<?php } else { ?>
    <a href="home.php" class="btn btn-primary">visit website</a>
<?php } ?>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
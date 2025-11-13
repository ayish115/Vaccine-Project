<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Edit Record</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 bg-warning shadow mt-4 rounded">
                <h3 class="text-center text-white">Edit Your Record</h3>
            </div>
            <div class="col-md-12 mt-4">
                <form action="editQuery.php" method="POST">
                    <?php
                    include 'conection.php';
                    $id = $_GET['id'];
                    $showdata = "SELECT * FROM `regiter` WHERE `Id`= $id";
                    $result = mysqli_query($con, $showdata);
                    $row = mysqli_fetch_assoc($result);
                    // print_r($row); exit()
                    ?>
                    <div class="fomr-group mt-2">
                        <label>Name</label>
                        <input type="hidden" name="id" value="<?php echo $row['Id'] ?>" class="form-control">
                        <input type="text" name="username" value="<?php echo $row['Name'];?>" class="form-control">
                    </div>
                    <div class="fomr-group mt-2">
                        <label>E-mail</label>
                        <input type="hidden" name="updatestatus" value="<?php echo $row['updatestatus'];?>" class="form-control">
                        <input type="email" name="useremail" value="<?php echo $row['Email'];?>" class="form-control">
                    </div>
                    <div class="fomr-group mt-2">
                        <label>Password</label>
                        <input type="text" name="userpassword" value="<?php echo $row['Password'];?>" class="form-control">
                    </div>
                    <div class="fomr-group mt-2">
                        <label>Roll</label>
                        <input type="text" name="userroll" value="<?php echo $row['Role'];?>" class="form-control">
                    </div>
                    <input type="submit" value="Update" class="btn btn-warning mt-4"  name="updatebtn">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>
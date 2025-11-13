<?php
include 'conection.php'
?>
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
    <title>show Data</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead class="bg-success text-white">
                        <th>ID</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                        <th>Password</th>
                        <th>Role</th>
                        <th>update</th>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM `regiter`";
                        $data = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($data)) { ?>
                            <tr>
                                <td><?php echo $row['Id'] ?></td>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Password'] ?></td>
                                <td><?php echo $row['Role'] ?></td>
                                <?php
                                if ($row['updatestatus'] != 1) { ?>
                                    <td>
                                        <a href="edit.php?id=<?php echo $row['Id'] ?>" class="badge badge-primary">Edit</a>
                                        <a href="dlt.php?dltid=<?php echo $row['Id'] ?>" class="badge badge-danger">Delet</a>
                                    </td>
                                <?php } else { ?>
                                    <td>
                                        <span class="badge badge-warning">You already Update</span>
                                    </td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                        <?php if (isset($_GET['dltmsg'])) { ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congratulation</strong> <?php echo $_GET['dltmsg']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
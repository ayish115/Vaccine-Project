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
    <title>show form</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead class="bg-success text-white">
                        <th>Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>Contect-no</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Vaccine</th>
                        <th>Hospital</th>
                        <th>Address</th>
                    </thead>
                    <tbody>
                        <?php
                        include "conection.php";
                        $query = "SELECT * FROM `appform`";
                        $data = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_assoc($data)) { ?>
                            <tr>
                                <td><?php echo $row['Name'] ?></td>
                                <td><?php echo $row['age'] ?></td>
                                <td><?php echo $row['Email'] ?></td>
                                <td><?php echo $row['Number'] ?></td>
                                <td><?php echo $row['date'] ?></td>
                                <td><?php echo $row['time'] ?></td>
                                <td><?php echo $row['vaccine'] ?></td>
                                <td><?php echo $row['hospital'] ?></td>
                                <td><?php echo $row['address'] ?></td>
                            </tr>
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

</html>
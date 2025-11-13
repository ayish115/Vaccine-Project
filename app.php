<?php
include "conection.php";
session_start();
?>
<?php
$home = array("Aga Khan Hospital, Karachi ", "Civil Hopital Karahi" , "Fatima Memorial Hospital, Lahore" , "Ali Medical Center Islamabad", "shaukat Khanum Memorial Hospta, Lahore");
$voc = array("Dtap", "MMR" , "Polio" , "Rotavirus" , "Hepatitas B" , "Influenza" , "PCV13" , "Hib" , "Covid19" , "Varcella", "Rv" ,"Meningococcal" ,"MenB", "BCG" , "IPV" , "Rotateq" , "JE" , "Flublok" , "Rotashield" , "Fluad" , "Harvix" , "ZapRota","Acela", "Shanchol" , "Tentus Diphtheria" , "Td" , "Twinrix" , "YF-Vax" , "Influenza" , "Meningococcal");
?>
 <?php if(isset($_SESSION['Pemail']) != null)  {?>
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
    <title>Appointment</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="app.php" method="$_POST">
                    <div class="container bg-primary text-center mt-3 pt-1 pb-1">
                        <h1 class="text-white">Appointment Form</h1>
                    </div>
                    <div class="form-group mt-2">
                        <label for="name">Child's Name</label>
                        <input name="name" id="name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="name">Child's Age</label>
                        <input name="age" id="name" type="text" class="form-control"  required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="name">Parent's E-mail</label>
                        <input name="email" id="name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="name">contact-no</label>
                        <input name="number" id="name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="name">choose Date</label>
                        <input name="date" id="name" type="date" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                        <label for="name">chosse time</label>
                        <input name="time" id="name" type="time" class="form-control" required>
                    </div>
                    <div class="form-group mt-2">
                    <label for="">Vaccine</label>
                        <select name="vaccine" id="" class="form-control" required> 
                            <option value="" selected disabled>Select Your Vaccine</option>
                            <?php foreach($voc as $vaccine){ ?>
                                <option value="<?php echo $vaccine ?>"><?php echo $vaccine ?></option>
                                <?php } ?>
                        </select>
                    </div>
                        <div class="form-group mt-2">
                        <label for="">Hospital</label>
                        <select name="hospital" id="" class="form-control" required>
                            <option value="" selected disabled>Confirm Hospital</option>
                            <?php foreach($home as $hos){?>
                            <option value="<?php echo $hos ?>"><?php echo $hos ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <label for="name">Confirm Address</label>
                        <input name="address" id="name" type="text" class="form-control" required>
                    </div>
                    <button type="submit" name="apbtn" class="btn btn-primary">submit</button>
                </form>
                <?php if (isset($_GET['msg'])) { ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulation</strong> <?php echo $_GET['msg']; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>

<?php } else { 
     header("location: home.php");
}
    ?>


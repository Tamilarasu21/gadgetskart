<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['user']))
        {
            header("Location:../index.php");
        }

        include "../includes/header.php";
        include "../includes/banner.php"; 
        include "../includes/navbar_user.php";
        
        $Url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($Url,"empty=failed")==true)
        {
            echo '<div class="alert alert-warning alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Please fill all the fields</strong></div>';
        }

        include "../config.php";
        $sql="select * from users where email='".$_SESSION['user']."'";
        $run=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($run))
        {     
    ?>
    <div class="container">
        <form action="paymentProcess" method="post" class="well form-horizontal">
            <legend><h2 class="text-center text-danger">Payment Space</h2></legend>
            <!-- name -->
            <div class="form-group">
                <label for="name" class="col-md-4 control-label">Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" id="name" name="name" class="form-control" value="<?php echo  ucwords($row['firstname']." ".$row['lastname']) ?>">
                    </div>
                </div>
            </div>
            <!-- email -->
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="text" id="email" name="email" class="form-control" value="<?php echo  $_SESSION['user'] ?>">
                    </div>
                </div>
            </div>
            <!-- mobile -->
            <div class="form-group">
                <label for="mobile" class="col-md-4 control-label">Mobile</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="tel" id="mobile" name="mobile" class="form-control" value="<?php echo  $row['mobile'] ?>">
                    </div>
                </div>
            </div>
            <!-- total -->
            <div class="form-group">
                <label for="total" class="col-md-4 control-label">Total</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-plus"></i></span>
                        <input type="text" id="total" name="total" class="form-control" value="<?php echo  "&#8377;.".$_GET['total'] ?>">
                    </div>
                </div>
            </div>
            <!-- city -->
            <div class="form-group">
                <label for="city" class="col-md-4 control-label">City</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" id="city" name="city" class="form-control" value="<?php echo  $row['city'] ?>">
                    </div>
                </div>
            </div>
            <!-- landmark -->
            <div class="form-group">
                <label for="landmark" class="col-md-4 control-label">Landmark</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" id="landmark" name="landmark" class="form-control" value="<?php echo  $row['landmark'] ?>">
                    </div>
                </div>
            </div>
            <!-- pincode -->
            <div class="form-group">
                <label for="pincode" class="col-md-4 control-label">Pincode</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
                        <input type="text" id="pincode" class="form-control" name="pincode" value="<?php echo  $row['pincode'] ?>">
                    </div>
                </div>
            </div>
            <!-- mode -->
            <div class="form-group">
                <label for="mode" class="col-md-4 control-label">Mode</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <label for="credit" class="radio-inline"><input type="radio" name="mode" value="credit card" id="credit" checked>credit card</label>
                        <label for="upi" class="radio-inline"><input type="radio" name="mode" value="UPI" id="upi">UPI</label>
                        <label for="debit" class="radio-inline"><input type="radio" name="mode" value="debit card" id="debit">Debit Card</label>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="form-group">
                <label for="" class="col-md-4 control-label"></label>
                <div class="col-md-2 inputGroupContainer">
                    <div class="input group">
                        <button name="pay" type="submit" class="btn btn-primary btn-block">Pay</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php } include "../includes/footer.php"; ?>
    <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

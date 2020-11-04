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
<body bgcolor="#c2c2c2">
    <center>
        <?php 
        include "../includes/header.php";
        include "../includes/banner.php";
        include "../includes/navbar_seller.php";
        ?>
    </center>
    
    <div class="main">
        <div class="container">
        <form method="get" class="well form-horizontal" action="updateSeller.php">
            <legend><h2 class="text-danger text-center">Update Seller</h2></legend>
            <!-- firm name  -->
            <div class="form-group">
                <label for="firmname" class="col-md-4 control-label">Store Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <?php
                            if(isset($_GET['firmname']))
                            {
                                $firmname=$_GET['firmname'];
                                echo '<input type="text" name="firmname" id="firmname" class="form-control" placeholder="Enter Firm name" value="'.$firmname.'">';
                            }
                            else
                            {
                                echo '<input type="text" name="firmname" id="firmname" class="form-control" placeholder="Enter Firm name">';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- owner name -->
            <div class="form-group">
                <label for="owner" class="col-md-4 control-label">Owner Name</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <?php
                            if(isset($_GET['owner']))
                            {
                                $owner=$_GET['owner'];
                                echo '<input type="text" name="owner" id="owner" class="form-control" placeholder="Enter Owner name" value="'.$owner.'">';
                            }
                            else
                            {
                                echo '<input type="text" name="owner" id="owner" class="form-control" placeholder="Enter Owner name">';
                            }
                        ?>
                    </div>
                </div>
            </div>       
            <!-- mobile number -->
            <div class="form-group">
                <label for="mobile" class="col-md-4 control-label">Mobile Number</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <?php
                            if(isset($_GET['mobile']))
                            {
                                $mobile=$_GET['mobile'];
                                echo '<input type="tel" name="mobile" id="mobile" class="form-control" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Enter Mobile Number" value="'.$mobile.'">';
                            }
                            else
                            {
                                echo '<input type="tel" name="mobile" id="mobile" class="form-control" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Enter Mobile Number">';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- Gender -->
            <div class="form-group">
                <label for="gender" class="col-md-4 control-label">Gender</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <?php
                        if(isset($_GET['gender']))
                        {
                            $gender=$_GET['gender'];
                            ?>
                            <label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="male" <?php echo ($gender=="male") ? "checked" : " "; ?>>Male</label>
                            <label for="female" class="radio-inline"><input type="radio" name="gender" id="female" value="female"<?php echo ($gender=="female") ? "checked" : " "; ?>>Female</label>
                        <?php
                        }
                        else
                        {
                            ?>
                            <label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="male">Male</label>
                            <label for="female" class="radio-inline"><input type="radio" name="gender" id="female" value="female">Female</label>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="form-group">
                <label for="" class="col-md-4 control-label"></label>
                <div class="col-md-2 inputGroupContainer">
                    <div class="input-group">
                        <button name="edit" class="btn btn-success btn-block">Update</button>
                    </div>
                </div>
            </div>    
        </form>
        </div>
    </div>
    <br>
        <?php include "../includes/footer.php" ?> 
    <script src="../js/validate_seller.js"></script>
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
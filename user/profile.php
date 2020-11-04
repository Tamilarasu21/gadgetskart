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
     
    include "../config.php";
    include "../includes/header.php";
    include "../includes/banner.php";
    include "../includes/navbar_user.php";
    ?>
    
    <?php 
        $firstname=$_GET['firstname'];
        $lastname=$_GET['lastname'];
        $gender=$_GET['gender'];
        $mobile=$_GET['mobile'];
        $city=$_GET['city'];
        $pincode=$_GET['pincode'];
        $landmark=$_GET['landmark'];
        ?>
    <div class="main">
        <div class="container">
            <?php echo '<form action="updateUser.php?firstname='.$firstname.'&lastname='.$lastname.'&mobile='.$mobile.'&gender='.$gender.'&city='.$city.'&landmark='.$landmark.'&pincode='.$pincode.'" method="get" class="well form-horizontal">'; ?>
                <legend><h2 class="text-center text-info">Update Profile</h2></legend>
                <!-- firstname -->
                <div class="form-group">
                    <label for="firstname" class="col-md-4 control-label">First Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <?php
                                if(isset($_GET['firstname']))
                                {
                                    $firstname=$_GET['firstname'];
                                    echo '<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First name" value="'.ucwords($firstname).'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="firstname" id="firstname" class="form-control" placeholder="Enter First name">';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- lastname -->
                <div class="form-group">
                    <label for="lastname" class="col-md-4 control-label">Last Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <?php
                                if(isset($_GET['lastname']))
                                {
                                    $lastname=$_GET['lastname'];
                                    echo '<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter lastname" value="'.ucfirst($lastname).'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="lastname" id="lastname" class="form-control" placeholder="Enter Lastname">';
                                }
                            ?>
                        </div>
                    </div>
                </div>                
                <!-- gender -->
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
                            { ?>
                                <label for="male" class="radio-inline"><input type="radio" name="gender" id="male" value="male">Male</label>
                                <label for="female" class="radio-inline"><input type="radio" name="gender" id="female" value="female">Female</label>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- mobile -->
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
                <!--city -->
                <div class="form-group">
                    <label for="city" class="col-md-4 control-label">City</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                            <?php
                                if(isset($_GET['city']))
                                {
                                    $city=$_GET['city'];
                                    echo '<input type="text" name="city" id="city" class="form-control" placeholder="Enter city" value="'.$city.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="city" id="city" class="form-control" placeholder="Enter city">';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- pincode -->
                <div class="form-group">
                    <label for="pincode" class="col-md-4 control-label">Pincode</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
                            <?php
                                if(isset($_GET['pincode']))
                                {
                                    $pincode=$_GET['pincode'];
                                    echo '<input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter pincode" value="'.$pincode.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="pincode" id="pincode" class="form-control" placeholder="Enter pincode">';
                                }
                            ?>
                        </div>
                    </div>
                </div>   
                <!-- landmark -->
                <div class="form-group">
                    <label for="landmark" class="col-md-4 control-label">Landmark</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <?php
                                if(isset($_GET['landmark']))
                                {
                                    $landmark=$_GET['landmark'];
                                    echo '<input type="text" name="landmark" id="landmark" class="form-control" placeholder="Enter landmark" value="'.$landmark.'">';
                                }
                                else
                                {
                                    echo '<input type="text" name="landmark" id="landmark" class="form-control" placeholder="Enter landmark">';
                                }
                            ?>
                        </div>
                    </div>
                </div>      
                <!-- submit -->
                <div class="form-group">
                    <label for="" class="col-md-4 control-label"></label>
                    <div class="col-md-2 inputGroupContainer">
                        <div class="input-group">
                            <button name="update" type="submit" class="btn btn-info btn-block">Update</button>
                        </div>
                    </div>
                    &emsp;&emsp;
                    <div class="col-md-2 inputGroupContainer">
                        <div class="input-group">
                            <a href="changePassword.php" class="btn btn-warning btn-block">Change Password&nbsp;&raquo;</a>
                        </div>
                    </div>
                </div>                
            </form>
        </div>
    </div>
        <?php include "../includes/footer.php" ?>
        
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

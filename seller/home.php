<?php 
session_start(); 
if(!isset($_SESSION['seller']))
{
    header("Location:../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/font-awesome.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body bgcolor="#ebebeb">
   <?php
        include "../config.php";
        include "../includes/header.php";
        include "../includes/banner.php";
        include "../includes/navbar_seller.php";

        $Url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($Url,"update=success")==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Updated Successfully</strong></div>';
        }
        
        $sql="select * from seller where email='".$_SESSION['seller']."'";
        $run=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($run))
        {
            $firmname=stripslashes($row['firmname']);
            $owner=stripslashes($row['owner']);
            $email=stripslashes($row['email']);
            $mobile=stripslashes($row['mobile']);
            $gender=stripslashes($row['gender']);

   ?>
   <div class="container">
   <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="main-box clearfix">
                <h2><?php echo ucwords($row['owner']); ?></h2>
                <div class="profile-status">
                    <i class="fa fa-check-circle"></i> Online
                </div>
                <img src="../assets/man_avatar.png" alt="" class="profile-img img-responsive center-block">
                <div class="text-center profile-label">
                    <span class="label label-warning">Seller</span>
                </div>
                <br>
                <div class="text-center  profile-stars">
                    <i class="text-success fa fa-star"></i>
                    <i class="text-success fa fa-star"></i>
                    <i class="text-success fa fa-star"></i>
                    <i class="text-success fa fa-star"></i>
                    <i class="text-success fa fa-star-o"></i>
                    <span>Super User</span>
                </div>

                <div class="text-center">
                    Member since: Jan 2012
                </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="main-box clearfix">
                <div class="profile-header">
                    <h3><span>User info</span></h3>
                    <hr style="border-top:2px solid gray">
                </div>
                <div class="row">
                    <div class="col-sm-8">
                      <?php echo '<a href="profile.php?firmname='.$firmname.'&owner='.$owner.'&mobile='.$mobile.'&gender='.$gender.'" class="btn btn-info" style="float:right">Edit Profile</a>'; ?>
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                Firm Name
                            </span>&emsp;
                            <span>
                               <?php echo $row['firmname'] ?>
                            </span>
                        </p>
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                Owner
                            </span>&emsp;
                            <span>
                                <?php echo $row['owner'] ?>
                            </span>
                        </p>
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                Email
                            </span>&emsp;
                            <span>
                                <?php echo $row['email'] ?>
                            </span>
                        </p>
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                Phone number
                            </span>&emsp;
                            <span>
                                <?php echo $row['mobile'] ?>
                            </span>
                        </p>
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                Gender
                            </span>&emsp;
                            <span>
                                <?php echo $row['gender'] ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    </div>
    </div>
    <?php
        } 
        include "../includes/footer.php"; 
    ?>
    <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php 
    session_start();
    include_once "../config.php";
    if(!isset($_SESSION['admin']))
    {
        header("Location:index.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamilarasu">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
</head>
<body>
    <?php include_once "header.php"; ?>
    <div class="container">
       <?php
            $sql="select * from admin where email='".$_SESSION['admin']."'";
            $run=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($run))
            {
       ?>
       <div class="row">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="main-box clearfix">
                <h2><?php echo 'ADMIN'; ?></h2>
                <div class="profile-status">
                    <i class="fa fa-check-circle"></i> Online
                </div>
                <img src="../assets/man_avatar.png" alt="" class="profile-img img-responsive center-block">
                <div class="text-center profile-label">
                    <span class="label label-info">Admin</span>
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
                    <h3><span>Admin info</span></h3>
                    <hr style="border-top:2px solid blue"/>
                </div>
                <div class="row">
                    <div class="col-sm-8">
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                First Name
                            </span>&emsp;
                            <span>
                               Admin
                            </span>
                        </p>
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                Last Name
                            </span>&emsp;
                            <span>
                                One
                            </span>
                        </p>
                        <p>
                            <span class="text-info" style="font-weight:bold">
                                Email
                            </span>&emsp;
                            <span>
                                <?php echo $row['email']; }?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>        
    </div>
    <?php include "footer.php" ?>
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
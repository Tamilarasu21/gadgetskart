<?php session_start() ?>
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
<body style="background-color:#d2d2d2">
<?php
include_once "../config.php";
include_once "../includes/header.php";
include_once "../includes/banner.php";
include_once "../includes/navbar_user.php";

$Url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($Url,"change=error")==true)
        {
            echo '<div class="alert alert-danger alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error Occured</strong>
          </div>';
        }
        elseif(strpos($Url,"change=success")==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Password Changed successfully</strong>
          </div>';
        }
        elseif(strpos($Url,"change=npnomatch")==true)
        {
            echo '<div class="alert alert-danger alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Please check your new passwords</strong>
          </div>';
        }
        elseif(strpos($Url,"change=opnomatch")==true)
        {
            echo '<div class="alert alert-danger alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Please check your old password</strong>
          </div>';
        }
?>
<div class="container">
    <form class="well form-horizontal" method="post" action="changePass.php">
        <legend><h2 class="text-center font-weight-bold">Change Password</h2></legend>
        <div class="form-group">
            <label for="opassword" class="col-md-4 control-label">Old Password</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-unlock"></i></span>
                    <input type="password" name="opassword" id="opassword" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="npassword" class="col-md-4 control-label">New Password</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-unlock-alt"></i></span>
                    <input type="password" name="npassword" id="npassword" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="cnpassword" class="col-md-4 control-label">Comfirm New Password</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input type="password" name="cnpassword" id="cnpassword" class="form-control">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-4 control-label"></label>
            <div class="col-md-2 inputGroupContainer">
                <div class="input group">
                    <input type="submit" name="change" value="Change" class="btn btn-warning btn-block">
                </div>
            </div>
        </div>    
     </form>
</div>
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

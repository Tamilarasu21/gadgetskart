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
<body bgcolor="#c2c2c2">
    <center>
        <?php include "../includes/header.php" ?>
    </center>
<div class="main">
    <?php
        $Url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($Url,"login=error")==true)
        {
            echo '<div class="alert alert-danger alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Error Occured</strong>
          </div>';
        }
        elseif(strpos($Url,"register=success")==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Registered successfully</strong>
          </div>';
        }
    ?>
   <div class="container">
        <form action="" method="post" class="well form-horizontal">
            <legend><h2 class="text-primary text-center">User Sign In</h2></legend>
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <?php
                            if(isset($_GET['email']))
                            {
                                $email=$_GET['email'];
                                echo '<input type="email" name="email" id="email" pattern="^[a-zA-Z0-9]+@gmail\.com+$" class="form-control" placeholder="Enter Email" value="'.$email.'">';
                            }
                            else
                            {
                                echo '<input type="email" name="email" id="email" pattern="^[a-zA-Z0-9]+@gmail\.com+$" class="form-control" placeholder="Enter Email">';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-2 inputGroupContainer">
                    <div class="input group">
                        <button name="login" class="btn btn-info btn-block">Sign In</button>
                    </div>
                </div>
            </div>                
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input group">
                        <p>new user ? <a href="register.php" class="btn btn-link">Sign Up</a></p>
                    </div>
                </div>
            </div>             
        </form>
    </div>
</div>
        <div class="navbar navbar-fixed-bottom">
            <?php include "../includes/footer.php" ?>                 
        </div>
   
   <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php
    include "../config.php";
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $query="select * from users where email='".$email."' and password='".$password."'";
        $read=mysqli_query($con,$query);
        if(mysqli_num_rows($read) == 1)
        {
            $_SESSION['user']=$email;
            header("Location:home.php");
        }
        else
        {
            header("Location:login.php?login=error&email=$email");
        }
    }
    
?>    
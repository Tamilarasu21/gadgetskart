<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/font-awesome.css">
</head>
<body bgcolor="#e6edfa">
<center><?php include "../includes/header.php" ?></center>
    <?php
        if(isset($_SESSION['admin']))
        {
            header("Location:home.php");
        }

        $Url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($Url,"index=error")==true)
        {
            echo '<div class="alert alert-danger alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error Occured</strong></div>';
        }
        elseif(strpos($Url,"index=empty")==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Please fill all the fields!</strong></div>';
        }

        
    ?>
    <div class="main">
        <div class="container">
        <form action="" method="post" autocomplete="off" class="well form-horizontal">
            <legend><h2 class="text-success text-center">Admin Panel</h2></legend>
            <!-- email -->
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <?php
                            if(isset($_GET['email']))
                            {
                                $email=$_GET['email'];
                                echo '<input type="email" name="email" id="email" class="form-control" placeholder="Enter email" value="'.$email.'">';
                            }
                            else
                            {
                                echo '<input type="email" name="email" id="email" class="form-control" placeholder="Enter email">';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <!-- password -->
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Atleast 6 characters">
                    </div>
                </div>
            </div>
            <!-- submit button -->
            <div class="form-group">
                <label for="" class="col-md-4 control-label"></label>
                <div class="col-md-2 inputGroupContainer">
                    <div class="input-group">
                        <button name="login" class="btn btn-info btn-block">Login</button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
    <div class="navbar-fixed-bottom">
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
    $password=$_POST['password'];
    if(empty($email) || empty($password))
    {
        header("Location:index.php?index=empty&email=$email");
    }
    else
    {
        $sql="select * from admin where email='".$email."' and password='".$password."'";
        $run=mysqli_query($con,$sql);
        if(mysqli_num_rows($run) == 1)
        {
            $_SESSION['admin']=$email;
            header("Location:home.php");
        }
        else
        {
            header("Location:index.php?index=error&email=$email");
        }
    }
}
?>
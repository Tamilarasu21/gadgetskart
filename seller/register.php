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
            if(strpos($Url,"register=error")==true)
            {
                echo '<div class="alert alert-danger alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error Occured</strong></div>';
            }
            elseif(strpos($Url,"register=nomatch")==true)
            {
                echo '<div class="alert alert-danger alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Password not match</strong></div>';
            }
            elseif(strpos($Url,"register=empty")==true)
            {
                echo '<div class="alert alert-danger alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Please fill all the fields</strong></div>';
            }
        ?>
        <div class="container">
        <form action="" method="post" class="well form-horizontal" name="seller_reg" onsubmit="return validate()">
            <legend><h2 class="text-danger text-center">Seller SignUp</h2></legend>
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
            <!-- email -->
            <div class="form-group">
                <label for="email" class="col-md-4 control-label">Email Address</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <?php
                            if(isset($_GET['email']))
                            {
                                $email=$_GET['email'];
                                echo '<input type="email" name="email" id="email" class="form-control" pattern="^[a-zA-Z0-9]+@gmail\.com+$" placeholder="Enter Email" value="'.$email.'">';
                            }
                            else
                            {
                                echo '<input type="email" name="email" id="email" class="form-control" pattern="^[a-zA-Z0-9]+@gmail\.com+$" placeholder="Enter Email">';
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
            <!-- password -->
            <div class="form-group">
                <label for="password" class="col-md-4 control-label">Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Atleast 6 characters" required>
                    </div>
                </div>
            </div>
            <!-- confirm password -->
            <div class="form-group">
                <label for="cpassword" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Retype Password" required>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="form-group">
                <label for="" class="col-md-4 control-label"></label>
                <div class="col-md-2 inputGroupContainer">
                    <div class="input-group">
                        <button name="register" class="btn btn-success btn-block">Sign Up</button>
                    </div>
                </div>
            </div>
            <!-- button -->
            <div class="form-group">
                <label for="" class="col-md-4 control-label"></label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <p>Already registered ?<a href="login.php"> Sign In</a></p>
                    </div>
                </div>
            </div>   
            
        </form>
        </div>
    </div>
    <div class="navbar-fixed-bottom">
        <?php include "../includes/footer.php" ?>
    </div> 
    <script src="../js/validate_seller.js"></script>
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
<?php
    include "../config.php";
    if(isset($_POST['register']))
    {
        $firmname=$_POST['firmname'];
        $owner=$_POST['owner'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $password=md5($_POST['password']);
        $cpassword=md5($_POST['cpassword']);
        
        
        if( empty($firmname) || empty($owner) || empty($email) || empty($mobile) || empty($gender) || empty($password) || empty($cpassword))
        {
            header("Location:register.php?register=empty&firmname=$firmname&owner=$owner&email=$email&mobile=$mobile&gender=$gender"); 
        }
        else
        {
            if($password == $cpassword)
            {   
                $query="insert into seller (firmname,owner,email,mobile,gender,password) values('$firmname','$owner','$email','$mobile','$gender','$password')";
                $read=mysqli_query($con,$query);
                if($read)
                {
                    header("Location:login.php?register=success");
                }
                else
                {
                    header("Location:register.php?register=error&firmname=$firmname&owner=$owner&email=$email&mobile=$mobile&gender=$gender");
                }
            }
            else
            {
                header("Location:register.php?register=nomatch&firmname=$firmname&owner=$owner&email=$email&mobile=$mobile&gender=$gender");
            }
        }
    }
    
?>
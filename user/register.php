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
    <center>
        <?php include "../includes/header.php" ?>
    </center>
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
                        <strong>Passwords must be Same</strong></div>';
        }
        elseif(strpos($Url,"register=empty")==true)
        {
            echo '<div class="alert alert-danger alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Please fill all the fields</strong></div>';
        }
    ?>
    <div class="main">
        <div class="container">
            <form action="" method="post" class="well form-horizontal">
                <legend><h2 class="text-primary text-center">User SignUp</h2></legend>
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
                <div class="form-group">
                    <label for="gender" class="col-md-4 control-label">Gender</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                        <?php
                            if(isset($_GET['gender']))
                            {
                                $gender=$_GET['gender'];
                                ?>
                                <label for="gender" class="radio-inline">
                                <input type="radio" name="gender" id="gender" value="male"<?php echo ($gender=='male')?'checked':' '; ?>>Male
                            </label>
                            <label for="gender" class="radio-inline">
                                <input type="radio" name="gender" id="gender" value="female"<?php echo ($gender=='female')?'checked':' '; ?>>Female
                            </label>
                            <?php
                            }
                            else
                            {
                                ?>
                               <label for="male" class="radio-inline">
                                <input type="radio" name="gender" id="male" value="male">Male
                            </label>
                            <label for="female" class="radio-inline">
                                <input type="radio" name="gender" id="female" value="female">Female
                            </label>
                           <?php
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
                            <input type="password" name="password" id="password" class="form-control" placeholder="Atleast 6 characters" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="cpassword" class="col-md-4 control-label">Confirm Password</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Retype Password" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-md-4 control-label"></label>
                    <div class="col-md-2 inputGroupContainer">
                        <div class="input-group">
                            <button name="register" class="btn btn-info btn-block">Sign Up</button>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="col-md-5 control-label"></label>
                    <div class="col-md-3 inputGroupContainer">
                        <div class="input-group">
                            <p>Already registered ? <a href="login.php" class="btn btn-link">Sign_In</a></p>
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
<?php
    include "../config.php";
    if(isset($_POST['register']))
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $password=md5($_POST['password']);
        $cpassword=md5($_POST['cpassword']);
        
        if( empty($firstname) || empty($lastname) || empty($email) || empty($mobile) || empty($gender) || empty($password) || empty($cpassword))
        {
            header("Location:register.php?register=empty&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&gender=$gender"); 
        }
        else
        {
            if($password == $cpassword)
            {
                $query="insert into users (firstname,lastname,email,mobile,gender,password) values('$firstname','$lastname','$email','$mobile','$gender','$password')";
                $read=mysqli_query($con,$query);
                if($read)
                {
                    header("Location:login.php?register=success");
                }
                else
                {
                    header("Location:register.php?register=error&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&gender=$gender");
                }
            }
            else
            {
                header("Location:register.php?register=nomatch&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&gender=$gender");
            }
        }
    }
    
?>
<?php session_start() ?>
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
    <?php
        if(!isset($_SESSION['admin']))
        {
            header("Location:index.php");
        }
    ?>
    <?php
        include "../config.php";
        $id=$_GET['userid'];
        $query="select * from users where id='".$id."'";
        $exe=mysqli_query($con,$query);
        
        while($rows=mysqli_fetch_array($exe))
        {
            $firstname=$rows['firstname'];
            $lastname=$rows['lastname'];
            $email=$rows['email'];
            $mobile=$rows['mobile'];
            $gender=$rows['gender'];
            $city=$rows['city'];
            $pincode=$rows['pincode'];
            $landmark=$rows['landmark'];
        }
    ?>
<div class="main">
    <div class="container">
        <form class="well form-horizontal" action="userUpdate?userid=<?php echo $id ?>" method="post">
            <!-- Form Name -->
            <legend><center><h2 class="text-success"><b>User Details</b></h2></center></legend><br>
            <!-- Firstname -->
            <div class="form-group">
                <label class="col-md-4 control-label">First Name</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="firstname" placeholder="First Name" class="form-control" value="<?php echo $firstname ?>">
                    </div>
                </div>
            </div>
            <!-- Lastname t-->
            <div class="form-group">
                <label class="col-md-4 control-label" >Last Name</label> 
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control" value="<?php echo $lastname ?>">
                    </div>
                </div>
            </div>
            <!-- Email -->
            <div class="form-group">
                <label class="col-md-4 control-label">Email Address</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        <input type="email" name="email" pattern="^[a-zA-Z0-9]+@gmail\.com+$" placeholder="email address" class="form-control" value="<?php echo $email ?>">
                    </div>
                </div>
            </div>
            <!-- Mobile Number -->
            <div class="form-group">
                <label class="col-md-4 control-label">Mobile Number</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        <input type="tel" name="mobile" pattern="[6-9]{1}[0-9]{2}[0-9]{3}[0-9]{4}" placeholder="Mobile Number" class="form-control" value="<?php echo $mobile ?>">
                    </div>
                </div>
            </div>
            <!-- gender -->
            <div class="form-group">
                <label class="col-md-4 control-label">Gender</label>
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="male"<?php echo ($gender=='male')?'checked':' ';?>>Male
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="gender" value="female"<?php echo ($gender=='female')?'checked':' ';?>>Female
                        </label>
                    </div>
                </div>
            </div>
            <!-- City -->
            <div class="form-group">
                <label class="col-md-4 control-label">City</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        <input type="text" name="city" placeholder="City" class="form-control" value="<?php echo $city ?>">
                    </div>
                </div>
            </div>
            <!-- Landmark -->
            <div class="form-group">
                <label class="col-md-4 control-label">Landmark</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                        <input type="text" name="landmark" placeholder="Landmark" class="form-control" value="<?php echo $landmark ?>">
                    </div>
                </div>
            </div>
            <!-- Pincode -->
            <div class="form-group">
                <label class="col-md-4 control-label">Zip Code</label>  
                <div class="col-md-4 inputGroupContainer">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-thumb-tack"></i></span>
                        <input type="text" inputmode="numeric" pattern="[0-9]{6}" name="pincode" placeholder="Zip code" class="form-control" value="<?php echo $pincode ?>">
                    </div>
                </div>
            </div>
            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-2"><br>
                    <input type="submit" name="update" value="update" class="btn btn-success btn-block">
                </div>
            </div>
        </form>
    </div>
</div>
<?php include "footer.php" ?>
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
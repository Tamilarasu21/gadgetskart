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
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                    <a href="#" class="navbar-brand">GadgetsKart&nbsp;<i class="fa fa-shopping-cart"></i></a>
            </div>
            <div id="menu" class="collapse navbar-collapse">
                <ul class="nav navbar-nav" style="font-size:16px;">
                    <li><a href="home.php">Home</a></li>
                    <li  class="active"><a href="sellers.php" >Sellers</a></li>
                    <li><a href="users.php" >Users</a></li>
                    <li><a href="sales.php">Sales</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php
        include "../config.php";
        $id=$_GET['sellerid'];
        $query="select * from seller where id='".$id."'";
        $exe=mysqli_query($con,$query);
        
        while($rows=mysqli_fetch_array($exe))
        {
            $owner=$rows['owner'];
            $firmname=$rows['firmname'];
            $email=$rows['email'];
            $mobile=$rows['mobile'];
            $gender=$rows['gender'];
        }
    ?>
    <div class="main">
        <div class="container">
            <form action="sellerUpdate?sellerid=<?php echo $id ?>" method="post" class="well form-horizontal">
                <!-- Form Name -->
                <legend><center><h2 class="text-success">Seller Details</h2></center></legend>
                <!-- Owner Name -->
                <div class="form-group">
                    <label for="owner" class="col-md-4 control-label">Owner Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="owner" id="owner" placeholder="Owner Name" class="form-control" value="<?php echo $owner ?>">
                        </div>
                    </div>
                </div>
                <!-- Firm Name -->
                <div class="form-group">
                    <label for="firmname" class="col-md-4 control-label">Firm Name</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" name="firmname" id="firmname" placeholder="Firm Name" class="form-control" value="<?php echo $firmname ?>">
                        </div>
                    </div>
                </div>
                <!-- Email Address -->
                <div class="form-group">
                    <label for="email" class="col-md-4 control-label">Email</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" name="email" id="email" placeholder="Email Address" class="form-control" value="<?php echo $email ?>">
                        </div>
                    </div>
                </div>
                <!-- Mobile Number -->
                <div class="form-group">
                    <label for="mobile" class="col-md-4 control-label">Mobile Number</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="tel" name="mobile" id="mobile  " class="form-control" value="<?php echo $mobile ?>">
                        </div>
                    </div>
                </div>
                <!-- Gender -->
                <div class="form-group">
                    <label for="gender" class="col-md-4 control-label">Gender</label>
                    <div class="col-md-4 inputGroupContainer">
                        <div class="input-group">
                            <label for="gender" class="radio-inline">
                                <input type="radio" name="gender" id="gender" value="male"<?php echo ($gender=='male')?'checked':' '; ?>>Male
                            </label>
                            <label for="gender" class="radio-inline">
                                <input type="radio" name="gender" id="gender" value="female"<?php echo ($gender=='female')?'checked':' '; ?>>Female
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Button -->
                <div class="form-group">
                    <label class="col-md-4"></label>
                    <div class="col-md-2">
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
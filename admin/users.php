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
    <div class="navbar navbar-inverse">
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
                <ul class="nav navbar-nav">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="sellers.php" >Sellers</a></li>
                    <li class="active"><a href="users.php" >Users</a></li>
                    <li><a href="sales.php">Sales</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="main">
    <?php
        include "../config.php";
        $sql="select * from users";
        $run=mysqli_query($con,$sql);

        $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($url,'edit=success')==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Updated successfully</strong>
          </div>';
        }
        elseif(strpos($url,'delete=success')==true)
        {
            echo '<div class="alert alert-success alert-dismissible text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Deleted successfully</strong>
          </div>';
        }
        ?>
        <h2 class="text-center text-success">User's List</h2>
        <div class="table-responsive">
            <table class="table table-hover">
            <tr>
                <th>S.No</th>
                <th>Name</th>
                <th>City</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Gender</th>
                <th>Actions</th>
            </tr>
            <?php
            $a=1;
                while($row=mysqli_fetch_assoc($run))
                { ?>
                    <tr>
                        <td><?php echo $a; ?></td>
                        <td><?php echo ucwords($row['firstname']." ".$row['lastname']); ?></td>
                        <td><?php echo ucwords($row['city']); ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo ucfirst($row['gender']); ?></td>
                        <td><a href="editUser.php?userid=<?php echo $row['id']; ?>" class="text-info"><i class="fa fa-edit"></i></a>&emsp;
                        <a href="deleteGuys.php?userid=<?php echo $row['id']; ?>" class="text-danger"><i class="fa fa-trash"></i></a></td>
                    </tr>
                <?php $a++; }
            ?>
        </table>
    </div>
</div>
    <?php include "footer.php" ?>
<!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
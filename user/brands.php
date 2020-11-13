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
</head>
<body bgcolor="#ebebeb">
<?php
    include "../includes/header.php";
    include "../includes/banner.php";
    include "../includes/navbar_user.php";
    include "../config.php";

    if(!isset($_SESSION['user']))
    {
        header("Location:index.php");
    }
    ?>
<div class="main">
    <legend><h1 class="text-success text-center" style="font-weight:600;">Popular Brands</h1></legend>
    <div class="container">
        <div class="row" style="padding:5px;">
    <?php
    $sql="select distinct brand from products order by brand asc";
    $run=mysqli_query($con,$sql);
    while($read=mysqli_fetch_assoc($run))
    {
        ?>
        <div class="col-lg-4 text-center" style="padding:10px">
        <a style="text-decoration:none" href="productBrands.php?brands=<?php echo  $read['brand'] ?>"><h2 class="text-danger"><img class="img-fluid" src="../assets/<?php echo  $read['brand'] ?>.png" alt="<?php echo  $read['brand'] ?>" width="150" height="150"><br>
            <?php echo  ucfirst($read['brand']) ?></h2></a>
        </div>
    <?php
    }
    ?>
        </div>
    </div>
</div>
    <?php include "../includes/footer.php" ?>
    <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
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
    <legend><h1 class="text-success text-center">Categories</h1></legend>
    <div class="container">
        <div class="row">
    <?php
    $sql="select distinct category from products";
    $run=mysqli_query($con,$sql);
    while($read=mysqli_fetch_assoc($run))
    {
        ?>
        <div class="col-lg-4 text-center" style="border:1px solid gray;border-radius:4px;">
        <a href="productCategory.php?category=<?php echo  $read['category'] ?>"><img class="img-circle" src="../assets/gadget123.png" alt="<?php echo  $read['category'] ?>" width="200" height="200">
            <h2 class="text-warning"><?php echo  ucfirst($read['category']) ?></h2></a>
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
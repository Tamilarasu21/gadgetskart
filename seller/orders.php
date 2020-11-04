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
<body>
    <?php
         if(!isset($_SESSION['seller']))
         {
             header("Location:../index.php");
         }
        include "../includes/header.php";
        include "../includes/banner.php";
        include "../includes/navbar_seller.php";
        include "../config.php";

        $sql="select * from sales where seller='".$_SESSION['seller']."'";
        $run=mysqli_query($con,$sql);
        ?>
        <legend><h2 class="text-primary text-center">Order's From Us</h2></legend>
        <div class="table-responsive">
        <table class="table table-hover">
            <tr>
                <th id='qty'>S.NO</th>
                <th>Product Name</th>
                <th>Price</th>
                <th id='qty'>Quantity</th>
                <th>User</th>
                <th>Time</th>
            </tr>
        <?php
        $a=1;
        while($row=mysqli_fetch_array($run))
        {
            echo "<tr><td id='qty'>".$a."</td>";
            echo "<td>".$row['product_name']."</td>";
            echo "<td id='qty'>&#8377;.".$row['price']."</td>";
            echo "<td id='qty'>".$row['quantity']."</td>";
            echo "<td>".$row['user']."</td>";
            echo "<td>".$row['date']."</td></tr>";
            $a++;
        }
    ?>
    </table>
    </div>
    <?php include "../includes/footer.php" ?> 
    <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
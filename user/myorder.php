<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamilarasu Arunachalam">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="../assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <?php
        if(!isset($_SESSION['user']))
        {
            header("Location:../index.php");
        }
        
        include "../includes/header.php";
        include "../includes/banner.php";
        include "../includes/navbar_user.php";
        include "../config.php";
        $sql="select * from sales where user='".$_SESSION['user']."'";
        $run=mysqli_query($con,$sql);
        ?>
        <div class="container">
            <h2 class="text-primary text-center">My Orders</h2>
            <div class="table-responsive">
            <table class="table table-hover"> 
                <tr>
                    <th>S.NO</th>
                    <th>Product Name</th>
                    <th>Price (INR)</th>
                    <th>Quantity</th>
                    <th>Time</th>
                </tr>
        <?php
        $a=1;
        while($row=mysqli_fetch_assoc($run))
        {
            echo "<tr><td>".$a."</td>";
            echo "<td>".$row['product_name']."</td>";
            echo "<td>&#8377;.".$row['price']."</td>";
            echo "<td>".$row['quantity']."</td>";
            echo "<td>".$row['date']."</td></tr>";
            $a++;
        }
    ?>
            </table>
        </div>
    </div>
    <?php include "../includes/footer.php" ?>
    <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
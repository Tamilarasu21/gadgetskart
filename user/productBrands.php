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
<body>
        <?php
            include "../config.php";
            include "../includes/header.php";
            include "../includes/banner.php";
            include "../includes/navbar_user.php";
                if(!isset($_SESSION['user']))
                {
                    header("Location:../index.php");
                }

                if(isset($_GET['brands']))
                {
                    $brands=$_GET['brands'];
                    $sql="select * from products where brand='".$brands."'";
                    $run=mysqli_query($con,$sql);
                    echo '<font face="verdana"><h1><center>'.ucfirst($brands).'</center></h1></font><div class="feed">';
                    while($row=mysqli_fetch_assoc($run))
                    {
                        echo "<div class='products'>
                        <form action='' method='post'>
                            <img src='../seller/".$row['path']."'>
                            <h2>".ucwords($row['product_name'])."</h2>
                            <p><strong>Price :</strong><s>&nbsp;&#8377;.".$row['aprice']."</s><span>&nbsp;&#8377;.".$row['oprice']."</span></p>
                            <button name='view' class='addToCart'><a href='viewProduct.php?product_id=".$row['product_id']."'>View Details</a></button>
                        </form>
                        </div>";
                    }
                }
            ?>  
            </div>
        <?php include "../includes/footer.php" ?>
        <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
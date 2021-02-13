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
        include_once "header.php";
    ?>
    <div class="main">
    <?php
        include "../config.php";
        $sql="select * from sales order by date desc";
        $run=mysqli_query($con,$sql);
        ?>
        <h2 class="text-center text-success">Recent Sales</h2>
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>S.No</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Buyer</th>
                    <th>Seller</th>
                    <th>Date</th>
                </tr>
                <?php
                $a=1;
                    while($row=mysqli_fetch_assoc($run))
                    { ?>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo ucwords($row['product_name']); ?></td>
                            <td><?php echo $row['quantity']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['user']; ?></td>
                            <td><?php echo $row['seller']; ?></td>
                            <td><?php echo $row['date']; ?></td>
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
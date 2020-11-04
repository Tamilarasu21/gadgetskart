<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Tamilarasu Arunachalam">
    <title>GadgetsKart</title>
    <link rel="shortcut icon" href="assets/cart.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="header" style="background:#b2bcc2;">
        <span class="logo">
            &nbsp;<span class="one">Gadgets</span><span class="two">Kart</span>
            <img src="assets/cart.png" alt="" style="width:33px;height:33px;margin-left:-28px">
        </span>
    </div>
    <div id="banner">
        <img src="assets/accs.png" alt="img" width="100%" style="max-height:250px;" class="img-fluid">
    </div>
    <?php include "includes/navbar.php"; ?>
    <div class="feed">
    <?php
        include "config.php";
        $sql="select * from products limit 4";
        $run=mysqli_query($con,$sql);
        while($row=mysqli_fetch_assoc($run))
        {
            echo "<div class='products'>
                    <img src='seller/".$row['path']."'>
                    <h1>".ucfirst($row['product_name'])."</h1>
                    <p><strong>Price :</strong><s>&nbsp;&#8377;.".$row['aprice']."</s><span>&nbsp;&#8377;.".$row['oprice']."</span></p>
                    <p><b>Category : </b>".ucfirst($row['category'])."</p>
                    <button name='add' class='addToCart'><a href='user/login.php'>Add to cart</a></button>
                  </div>";
        }
    ?>  
    </div>
    <div class="choice">
    <hr>
        <h3>I'm a</h3>
        <a href="user/login.php">Customer</a>&emsp;
        <a href="seller/login.php">Seller</a>
    </div>
    <?php include "includes/footer.php" ?>

<!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script> 
</body>
</html>
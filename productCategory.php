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
    <link rel="stylesheet" href="css/font-awesome.css" />
</head>
<body>
    <div class="header">
        <span class="logo">
            &nbsp;<span class="one">Gadgets</span><span class="two">Kart</span>
            <img src="assets/cart.png" alt="">
        </span>
    </div>
    <img src="assets/accs.png" alt="img" width="100%" style="max-height:250px;" class="img-fluid">
        <?php
            include "config.php";
            include "includes/navbar.php";
       
                if(isset($_GET['category']))
                {
                    $category=$_GET['category'];
                    $sql="select * from products where category='".$category."'";
                    $run=mysqli_query($con,$sql);
                    echo '<font face="verdana"><h1><center>'.ucfirst($category).'</center></h1></font><div class="feed">';
                    while($row=mysqli_fetch_assoc($run))
                    {
                        echo "<div class='products'>
                            <img src='seller/".$row['path']."'>
                            <h1>".ucwords($row['product_name'])."</h1>
                            <p><strong>Price :</strong><s>&nbsp;&#8377;.".$row['aprice']."</s><span>&nbsp;&#8377;.".$row['oprice']."</span></p>
                            <button name='view' class='addToCart'><a href='user/login.php'>View Details</a></button>
                        </div>";
                    }
                }
            ?>
            </div>  
        <?php include "includes/footer.php" ?>
        <!-- jQuery library -->
<script src="js/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
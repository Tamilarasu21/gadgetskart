<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
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
    
    include "../config.php";
    include "../includes/header.php";
    include "../includes/banner.php";
    include "../includes/navbar_user.php";
        $Url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($Url,"cart=empty")==true)
        {
            echo '<div class="alert alert-warning alert-dismissible text-center">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Please fill all the fields</strong></div>';
        }

        if(!isset($_SESSION['user']))
        {
            header("Location:index.php");
        }
        $a=1;
        $total=0;
        ?>
    <div class="container">
        <div class="table-responsive">
            <h2 class="text-success text-center">Your Cart <i class="fa fa-shopping-cart"></i></h2>
        <?php
        $sql="select * from cart where email='".$_SESSION['user']."'";
        $run=mysqli_query($con,$sql);
        if(mysqli_affected_rows($con) > 0)
        {
            echo "<table class='table table-hover'>
            <tr>
                <th>S.No</th>
                <th>Product Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Remove</th>
            </tr>";
            while($values=mysqli_fetch_assoc($run))
            {    
                echo "<tr>";
                echo "<td>".$a."</td>";
                echo "<td>".$values['product_name']."</td>";
                echo "<td>&emsp;&#8377;.".IND_money_format($values['price'])."</td>";
                echo "<td><form action='quantityUpdate.php' method='get'>
                <input type='hidden' name='product_id' value='".$values['product_id']."'>
                <div class='form-group col-md-3'><input type='number' step='1' min='1' max='9' id='quanity' class='form-control' name='quantity' value='".$values['quantity']."'></div>
                &emsp;<input type='submit' name='update' value='update' class='btn btn-success'></form></td>";
                $gross_price=$values['quantity']*$values['price'];
                echo "<td>&#8377;.".IND_money_format($gross_price)."</td>";
                echo "<td><a href='removeFromCart.php?del=".$values['product_id']."' class='text-danger'><i class='fa fa-trash fa-2x'></i></a></td>";
                $total+=$values['quantity']*$values['price'];
                echo "</tr>";
                $a++;           
            }
        }
        else
        {
            header("Location:home.php?cart=nothing");
        }
        echo '</table>';
        echo "<h2 class='text-center'>Total :&emsp;&#8377;.".IND_money_format($total)."</h2>";
        echo '<div class="text-center"><button class="btn btn-light"><a href="payment.php?total='.$total.'">Proceed to Checkout</a></button></div>';
            // To display money in indian currency format
            function IND_money_format($money)
            {
                $len = strlen($money);
                $m = '';
                $money = strrev($money);
                for($i=0;$i<$len;$i++)
                {
                    if(( $i==3 || ($i>3 && ($i-1)%2==0) )&& $i!=$len)
                    {
                        $m .=',';
                    }
                    $m .=$money[$i];
                }
                return strrev($m);
            }
        ?>
        </div>
    </div>
        <?php include "../includes/footer.php"; ?> 
        <!-- jQuery library -->
<script src="../js/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>     
</body>
</html>
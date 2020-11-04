<?php
    session_start();
    include "../config.php";
    // To increase or decrease quantity
    if(isset($_GET['update']))
    {
        $quantity=$_GET['quantity'];
        $pid=$_GET['product_id'];
        $stmt="update cart set quantity='".$quantity."' where product_id='".$pid."' and email='".$_SESSION['user']."'";
        $rap=mysqli_query($con,$stmt);
        if($rap)
        {
           header("Location:cart.php");
        }
    }     
?>
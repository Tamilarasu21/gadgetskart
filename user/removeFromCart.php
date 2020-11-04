<?php
    session_start();
    include "../config.php";
    if(isset($_GET['del']))
    {
        $pid=$_GET['del'];
        $sql="delete from cart where product_id='".$pid."' and email='".$_SESSION['user']."'";
        $run=mysqli_query($con,$sql);
        if($run)
        {
            echo "<script>alert('Product removed from cart')</script>";
            header("Location:cart.php");
        }
    }
?>
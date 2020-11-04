<?php
    session_start();
    include_once "../config.php";
    if(isset($_GET['prid']))
    {
        $pid=$_GET['prid'];
        $sql="delete from products where product_id='".$pid."'";
        $stmt=mysqli_query($con,$sql);
        if($stmt)
        {
            header("Location:products.php?delete=success");
        }
    }
?>
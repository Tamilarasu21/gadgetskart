<?php
session_start();
include_once "../config.php";

if(isset($_GET['edit']))
{
    $product_id=$_GET['product_id'];
    $product_name=$_GET['product_name'];
    $category=$_GET['category'];
    $brand=$_GET['brand'];
    $color=$_GET['color'];
    $aprice=$_GET['aprice'];
    $oprice=$_GET['oprice'];
    $description=$_GET['description'];
    $quantity=$_GET['quantity'];

    $sql="update products set product_name='".$product_name."',category='".$category."',brand='".$brand."',color='".$color."',aprice='".$aprice."',oprice='".$oprice."', description='".$description."', quantity='".$quantity."' where product_id='".$product_id."'";
    $exe=mysqli_query($con,$sql);
    if($exe)
    {
        header("Location:viewProduct.php?product_id=$product_id");
    }
}

?>
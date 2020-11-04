<?php
session_start();
include "../config.php";
if(isset($_POST['pay']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $total=$_POST['total'];
    $city=$_POST['city'];
    $landmark=$_POST['landmark'];
    $pincode=$_POST['pincode'];
    $mode=$_POST['mode'];
    $date=date('h:i:s d-m-Y');

        $w="select * from cart where email='".$_SESSION['user']."'";
        $a=mysqli_query($con,$w);
        while($read=mysqli_fetch_assoc($a))
        {
            $productid=$read['product_id'];
            $productname=$read['product_name'];
            $quantity=$read['quantity'];
            $price=$read['price'];
            $email=$_SESSION['user'];
            $seller=$read['seller_email'];
            $ddate=date('h:i:s d-m-Y');
            $c="insert into sales (product_id,product_name,quantity,price,user,seller,date) values('$productid','$productname','$quantity','$price','$email','$seller','$ddate')";
            $d=mysqli_query($con,$c);
            if($d)
            {
                // insert the datas to purchase table
                $sql="insert into purchase (name,email,mobile,total,city,landmark,pincode,mode,date) values('$name','$email','$mobile','$total','$city','$landmark','$pincode','$mode','$date')";
                $run=mysqli_query($con,$sql);
                if($run)
                {
                    $stmt="select * from cart where email='".$_SESSION['user']."'";
                    $big=mysqli_query($con,$stmt);
                    while($rock=mysqli_fetch_assoc($big))
                    {
                        $quantity=$rock['quantity'];
                        $product_id=$rock['product_id'];
                        $q="update products set quantity=quantity-'".$quantity."' where product_id='".$product_id."'";
                        $s=mysqli_query($con,$q);
                        if($s)
                        {
                            $query="delete from cart where email='".$_SESSION['user']."'";
                            $exe=mysqli_query($con,$query);
                        }
                    }        
                }
            }
        }
    
    header("Location:thankyou.php");
}

?>
<?php
session_start();
include "../config.php";

if(isset($_GET['update']))
{
        $firstname=$_GET['firstname'];
        $lastname=$_GET['lastname'];
        $mobile=$_GET['mobile'];
        $gender=$_GET['gender'];
        $city=$_GET['city'];
        $landmark=$_GET['landmark'];
        $pincode=$_GET['pincode'];

        $sql="UPDATE users SET firstname='$firstname', lastname='$lastname', mobile='$mobile', gender='$gender', city='$city', landmark='$landmark', pincode='$pincode' where email='$_SESSION[user]'";
        $run=mysqli_query($con,$sql);
        if($run)
        {
            header("Location:home.php?update=success");
        }
}
?>
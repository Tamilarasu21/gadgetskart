<?php
session_start();
include "../config.php";

if(isset($_GET['edit']))
{
        $firmname=$_GET['firmname'];
        $owner=$_GET['owner'];
        $mobile=$_GET['mobile'];
        $gender=$_GET['gender'];

        $sql="UPDATE seller SET firmname='$firmname', owner='$owner', mobile='$mobile', gender='$gender' where email='$_SESSION[seller]'";
        $run=mysqli_query($con,$sql);
        if($run)
        {
            header("Location:home.php?update=success");
        }
}
?>
<?php
    session_start();
    include "../config.php";
    if(isset($_POST['update']))
    {
        $sid=$_GET['sellerid'];
        $firmname=$_POST['firmname'];
        $owner=$_POST['owner'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];

        $sql="update seller set firmname='".$firmname."',owner='".$owner."',email='".$email."',mobile='".$mobile."',gender='".$gender."' where id='".$sid."'";
        $run=mysqli_query($con,$sql);
        if($run)
        {
            header("Location:sellers?edit=success");
        }
    }
?>
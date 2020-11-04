<?php
    session_start();
    include "../config.php";
    if(isset($_POST['update']))
    {
        $uid=$_GET['userid'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $city=$_POST['city'];
        $pincode=$_POST['pincode'];
        $landmark=$_POST['landmark'];

        $sql="update users set firstname='$firstname',lastname='$lastname',email='$email',mobile='$mobile',gender='$gender',city='$city',pincode='$pincode',landmark='$landmark' where id='$uid'";
        $run=mysqli_query($con,$sql);
        if($run)
        {
            header("Location:users.php?edit=success");
        }
    }
?>
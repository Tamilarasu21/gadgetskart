<?php
    session_start();
    include "../config.php";
    #for deleting seller
    if(isset($_GET['sellerid']))
    {
        $sid=$_GET['sellerid'];
        $sql="delete from seller where id='".$sid."'";
        $run=mysqli_query($con,$sql);
        if($run)
        {
            header("Location:sellers.php?delete=success");
        }
    }


    #for deleting user
    if(isset($_GET['userid']))
    {
        $uid=$_GET['userid'];
        $query="delete from users where id='".$uid."'";
        $read=mysqli_query($con,$query);
        if($read)
        {
            header("Location:users.php?delete=success");
        }
    }
?>
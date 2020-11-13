<?php 
    session_start();
    include "../config.php";
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=md5($_POST['password']);
        $query="select * from users where email='".$email."' and password='".$password."'";
        $read=mysqli_query($con,$query);
        if(mysqli_num_rows($read) == 1)
        {
            $_SESSION['user']=$email;
            header("Location:home.php");
        }
        else
        {
        ?>
        <script>
            window.location="../index.php";
        </script>
        <?php
        }
    }
    
?>    
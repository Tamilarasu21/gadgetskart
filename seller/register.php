<?php
    include "../config.php";
    if(isset($_POST['register']))
    {
        $firmname=$_POST['firmname'];
        $owner=$_POST['owner'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $password=md5($_POST['password']);
        $cpassword=md5($_POST['cpassword']);
        
        
        if( empty($firmname) || empty($owner) || empty($email) || empty($mobile) || empty($gender) || empty($password) || empty($cpassword))
        {
            header("Location:../index.php?register=empty&firmname=$firmname&owner=$owner&email=$email&mobile=$mobile&gender=$gender"); 
        }
        else
        {
            if($password == $cpassword)
            {   
                $query="insert into seller (firmname,owner,email,mobile,gender,password) values('$firmname','$owner','$email','$mobile','$gender','$password')";
                $read=mysqli_query($con,$query);
                if($read)
                {
                    header("Location:../index.php?register=success");
                }
                else
                {
                    header("Location:../index.php?register=error&firmname=$firmname&owner=$owner&email=$email&mobile=$mobile&gender=$gender");
                }
            }
            else
            {
                header("Location:../index.php?register=nomatch&firmname=$firmname&owner=$owner&email=$email&mobile=$mobile&gender=$gender");
            }
        }
    }
    
?>
<?php
    include "../config.php";
    if(isset($_POST['register']))
    {
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $gender=$_POST['gender'];
        $password=md5($_POST['password']);
        $cpassword=md5($_POST['cpassword']);
        
        if( empty($firstname) || empty($lastname) || empty($email) || empty($mobile) || empty($gender) || empty($password) || empty($cpassword))
        {
            header("Location:../index.php?register=empty&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&gender=$gender"); 
        }
        else
        {
            if($password == $cpassword)
            {
                $query="insert into users (firstname,lastname,email,mobile,gender,password) values('$firstname','$lastname','$email','$mobile','$gender','$password')";
                $read=mysqli_query($con,$query);
                if($read)
                {
                    header("Location:../index.php?register=success");
                }
                else
                {
                    header("Location:../index.php?register=error&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&gender=$gender");
                }
            }
            else
            {
                header("Location:../index.php?register=nomatch&firstname=$firstname&lastname=$lastname&email=$email&mobile=$mobile&gender=$gender");
            }
        }
    }
    
?>
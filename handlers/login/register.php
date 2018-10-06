<?php
  require_once '../../inc/db.php';
  $name=$_POST['name'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  if (!empty($username) and !empty($email) )
  {
    //user already exist check!!!
    $sql="SELECT * from users where username='$username' or email='$email'";
    $result=mysqli_query($link,$sql);
    $row=mysqli_fetch_assoc($result);

        if (empty($row))
         {

            if (!empty($password) and !empty($cpassword) and $password===$cpassword )
               {
                   $password_hash=password_hash($password, PASSWORD_DEFAULT);
                   $sql="INSERT into users (username,password_hash,name,email) values ('$username','$password_hash','$name','$email')";
                   if (mysqli_query($link,$sql)) {
                     $msg='success';
                   }
                }
            else {
                $msg='password criteria not satisfied';
                }

        }

        else {
          $msg='usernmae already exist';
        }
  }

  else
  {
    $msg=' username and emial cannot be empty';
  }

  $url_msg=urlencode($msg);
  $redirect_link="../../signup.php?msg=".$url_msg;

  if ($msg==='success') {
    header("location: ../../thanks.php");
  }
  else {
    header("location: $redirect_link");
  }



 ?>

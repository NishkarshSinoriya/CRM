<?php
  require '../inc/db.php';
  $name=$_POST['name'];
  $company=$_POST['company'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $status=$_POST['status'];
  $comment=$_POST['comment'];
  $sql="INSERT INTO client (name,company,contact,email,status,comment) VALUES ('$name','$company','$contact','$email','$status','$comment')";
  mysqli_query($link,$sql);
  header('location:../clientlist.php');


 ?>

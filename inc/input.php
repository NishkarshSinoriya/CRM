<?php
  require_once '../inc/db.php';
  $name=$_POST['name'];
  $contact=$_POST['contact'];
  $email=$_POST['email'];
  $company=$_POST['company'];
  $query=$_POST['query'];
  $status=$_POST['status'];
  $type=$_POST['type'];
  $followup=$_POST['followup'];
  $comment=$_POST['comment'];
  $sql=" SELECT * FROM client where contact='$contact'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);
  if ($contact==$row['contact'])
  {
    $client_id=$row['id'];
    $sql="INSERT INTO info (query,followup,comment,status,client_id,type) VALUES ('$query','$followup','$comment','$status','$client_id','$type') ";
    mysqli_query($link,$sql);
    header('location:../querylist.php');
  }
else
{
    $sql="INSERT INTO client (name,company,contact,email) VALUES ('$name','$company','$contact','$email') ";
    mysqli_query($link,$sql);
    $client_id=mysqli_insert_id($link);
    $sql="INSERT INTO info (query,followup,comment,status,client_id,type) VALUES ('$query','$followup','$comment','$status','$client_id','$type') ";
    mysqli_query($link,$sql);
    header('location:../querylist.php');
}

 ?>

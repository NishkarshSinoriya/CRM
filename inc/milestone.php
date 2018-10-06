<?php
  require_once 'db.php';
  $project_id=$_GET['id'];
  $title=$_POST['title'];
  $date=$_POST['date'];
  $sql="INSERT INTO milestone  (title,date, project_id) VALUES ('$title','$date','$project_id')";
  mysqli_query($link,$sql);
  header("location:../viewproject.php?id=$project_id");
 ?>

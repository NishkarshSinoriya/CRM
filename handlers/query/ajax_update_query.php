<?php
  require_once '../../inc/db.php';
  $id=$_GET['id'];
  $name=$_GET['name'];
  $contact=$_GET['contact'];
  $email=$_GET['email'];
  $company=$_GET['company'];
  $date=$_GET['date'];
  $query=$_GET['query'];
  $status=$_GET['status'];
  $type=$_GET['type'];
  $followup=$_GET['followup'];
  $comment=$_GET['comment'];
  $sql="UPDATE info
  LEFT JOIN client
  ON info.client_id = client.id
  set client.name='$name', client.contact='$contact', client.email='$email', client.company='$company',info.status='$status',info.followup='$followup',info.comment='$comment',info.type='$type' WHERE info.id='$id'";
  mysqli_query($link,$sql);
?>

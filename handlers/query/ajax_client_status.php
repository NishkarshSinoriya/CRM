<?php
  require_once '../../inc/db.php';
  $id=$_GET['id'];
  $value=$_GET['value'];
  $sql="UPDATE client set status='$value' WHERE id='$id'";
  mysqli_query($link,$sql);
 ?>

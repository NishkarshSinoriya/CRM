<?php
  require_once '../../inc/db.php';
  $line_id=$_GET['line_id'];
  $value=$_GET['value'];
  $sql="UPDATE info set status='$value' where id='$line_id'";
  mysqli_query($link,$sql);
 ?>

<?php
  require_once '../../inc/db.php';
  $line_id=$_GET['line_id'];
  $date=$_GET['date'];
  $sql="UPDATE info set followup='$date' where id='$line_id'";
  mysqli_query($link,$sql);
 ?>

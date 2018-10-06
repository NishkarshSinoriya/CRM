<?php
  require_once('../../inc/db.php');
  $id=$_GET['id'];
  echo $id;
  $sql="DELETE FROM client  WHERE id='$id' ";
  mysqli_query($link,$sql);
?>

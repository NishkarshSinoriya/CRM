<?php
  require_once('../../inc/db.php');
  $id=$_GET['id'];
  $sql=" UPDATE info SET type='query' WHERE id='$id' ";
  mysqli_query($link,$sql);
?>

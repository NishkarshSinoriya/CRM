<?php
  require_once '../../inc/db.php';
  $delete=$_GET['id'];
  $sql= " DELETE FROM info where id=  '$delete' ";
  mysqli_query($link,$sql);
 ?>

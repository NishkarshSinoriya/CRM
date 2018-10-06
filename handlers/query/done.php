<?php
  require_once '../../inc/db.php';
  $id=$_GET['id'];
  $sql="SELECT done from milestone where id='$id'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);

  if ($row['done']==='1') {
    $sql=" UPDATE milestone SET done ='0' WHERE id='$id' ";
  }
  else {
    $sql=" UPDATE milestone SET done ='1' WHERE id='$id' ";
  }
  mysqli_query($link,$sql);
 ?>

<?php
  require_once'../../inc/db.php';
  $id=$_GET['id'];
  $sql="SELECT info.id,info.date,info.query,info.followup,info.type,info.comment as info_comment,info.status as info_status,
        client.time,client.name,client.company,client.contact,client.email,client.status as client_status,client.comment as client_comment
        FROM info LEFT JOIN client ON info.client_id = client.id
        where info.id='$id'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);
  print_r(json_encode($row));
?>

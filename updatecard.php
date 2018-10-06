<?php include 'handlers/login/check_login.php'; ?>
<?php
  $id = $_GET['id'];
  require_once 'inc/db.php';
  $sql="SELECT info.id,info.date,info.query,info.followup,info.comment as info_comment,info.status as info_status,
        client.time,client.name,client.company,client.contact,client.email,client.status as client_status,client.comment as client_comment
        FROM info LEFT JOIN client ON info.client_id = client.id
        where info.id='$id'";
  $result=mysqli_query($link,$sql);
  $row=mysqli_fetch_assoc($result);
 ?>


<!DOCTYPE html>
<html>
    <?php include_once 'inc/head.php'; ?>
  <body>
    <?php include_once 'inc/nav.php'; ?>
    <?php include_once 'inc/sidebar.php'; ?>
    <?php include_once 'inc/updatecard.php'; ?>
  </body>

</html>
<?php include_once 'inc/scripts.php'; ?>

<?php

 ?>

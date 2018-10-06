<?php
  if (isset($_GET['logout']))
   {
    if (!isset($_SESSION))
    {
      session_start();
    }
    session_destroy();
    $logged_out=true;
  }
?>
<!DOCTYPE html>
<html>
  <?php include 'inc/head.php'; ?>
  <body>
  <?php
  include 'inc/login.php';
  include 'inc/scripts.php';
   ?>
  </body>
</html>

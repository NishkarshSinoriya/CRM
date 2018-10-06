<?php
  if (!isset($_SESSION))
  {
    session_start();
  }

  if (isset($_SESSION['logged_in']))
{

  if ($_SESSION['logged_in']!==true)
  {
    header('location: index.php?nli');
    exit;
  }
  else
  {

  }
}

else
{
  header('location: index.php?nli');
  exit;
}


 ?>

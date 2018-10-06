
  <?php
  require_once 'db.php';
  $project_id=$_GET['id'];
  $expanse=$_POST['expanse'];
  $date=$_POST['date'];
  $collection=$_POST['collection'];
  $sql="INSERT INTO expanse (expanse,collection,project_id,date) VALUES ('$expanse','$collection','$project_id','$date')";
  mysqli_query($link,$sql);
  header("location:../viewproject.php?id=$project_id");
 ?>

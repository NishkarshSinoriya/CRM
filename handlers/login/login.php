  <?php
  require '../../inc/db.php';
  if (!isset($_SESSION)) {
    session_start();
  }

  $username=$_POST['username'];
  $password=$_POST['password'];

  if (!empty($username))
  {
    $sql="SELECT * from users where username='$username'";
    $result=mysqli_query($link,$sql);
      if (!empty($row=mysqli_fetch_assoc($result)))
      {
          if (password_verify($password, $row['password_hash']))
          {
            $_SESSION['user_id']=$row['id'];
            $_SESSION['logged_in']=true;

            header('location:../../dashboard.php');
          }
          else
          {
            echo "password does not match";
          }

      }
      else
      {
        echo "user doesn't exist ";
      }

  }
  else
  {
    echo "usename can't be empty";
  }



 ?>

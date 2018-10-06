<?php
  if (isset($_GET['date1']))
  {
    $date1=$_GET['date1'];
    $date2=$_GET['date2'];
  }
  else
  {
    $date1='';
    $date2='';
  }
 ?>

<div id="cb">
<div class="container-fluid">
  <div class="row">
  <div class="heading">
    <h3>cashbook</h3>
    <p>detailed cashbook</p>
  </div>
  <div class="col-sm-11">
    <div class="card">
      <form class="" action="" method="get">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <ul>
                    <a href="cashbook.php"><li class="tabs">collection</li></a>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul>
                    <a href="expense.php"><li class="tabs">expenses</li></a>
                  </ul>
                </div>
              </div>
              <div id='collection' class="active">
                <div class="box">
                  <?php
                   if (isset($_GET['date1']))
                   {
                     require_once 'db.php';
                     $date1=$_GET['date1'];
                     $date2=$_GET['date2'];
                     $sql="SELECT sum(collection) FROM expanse WHERE date BETWEEN '$date1' AND '$date2'";
                     $result=mysqli_query($link,$sql);
                     $row=mysqli_fetch_assoc($result);
                   }

                   else
                   {
                     $row= NULL;
                   }
                  ?>
                  <div class="row">
                    <div class="wrap">
                      <div class="col-sm-4">
                        <input class="date_picker" type="text" name="date1" value=" <?php echo $date1 ?>  ">
                      </div>
                      <div class="col-sm-1">
                        <h3>to</h3>
                      </div>
                      <div class="col-sm-4">
                        <input class="date_picker" type="text" name="date2" value="<?php echo $date2 ?>">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" name="button">submit</button>
                      </div>
                      <div class="col-sm-3 col-sm-offset-9">
                        <h4>total collection -  <span><?php echo $row['sum(collection)'] ?></span> </h4>
                      </div>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>

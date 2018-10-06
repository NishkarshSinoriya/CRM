<?php
  $id =$_GET['id'];
    require_once 'inc/db.php';
    $sql="SELECT info.id,info.date,info.query,info.followup,info.comment as info_comment,info.status as info_status,
          client.time,client.name,client.company,client.contact,client.email,client.status as client_status,client.comment as client_comment
          FROM info LEFT JOIN client ON info.client_id = client.id
          where info.id='$id'";
      $result=mysqli_query($link,$sql);
      $row=mysqli_fetch_assoc($result);
?>

<div id="pv">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>detailed project information</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <div class="wrap padding">
          <div class="card">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-3">
                  <div class="wrapper">
                    <div class="profile">

                    </div>
                    <div class="text">
                      <h3> assigned to <br> <span>nishkarsh sinoriya</span>  </h3>
                    </div>
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="info">
                    <ul>
                      <div class="col-sm-6">

                      </div>
                      <div class="col-sm-6">
                        <li>date - <span><?php echo $row['date'] ?></span> </li>
                      </div>
                      <div class="col-sm-6">
                        <li>client name - <span><?php echo $row['name'] ?></span> </li>
                      </div>
                      <div class="col-sm-6">
                        <li>company - <span><?php echo $row['company'] ?></span> </li>
                      </div>
                      <div class="col-sm-6">
                        <li>contact no. - <span><?php echo $row['contact'] ?></span> </li>

                      </div>
                      <div class="col-sm-6">
                        <li>query for - <span><?php echo $row['query'] ?></span> </li>
                      </div>
                      <div class="col-sm-12">

                        <li>email - <span><?php echo $row['email'] ?></span> </li>

                      </div>
                      <div class="col-sm-6 col-sm-offset-6">
                      <li>   <button onclick="project(<?php echo $row['id'] ?>)" data-target='#projectmodal' data-toggle='modal' type="submit" id="button">delete</button> </li>

                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <?php
      require_once 'inc/db.php';
      $sql="SELECT * FROM milestone where project_id='$id' order by date asc";
      $result=mysqli_query($link,$sql);
      ?>

      <div class="col-sm-4">
        <div class="wrap">
          <div class="card">
            <div class="container-fluid">
              <div class="row">

                <form class="" action="inc/milestone.php?id=<?php echo $id; ?> " method="post">
                  <div  id='popup'  class="inactive">
                    <div class="add">
                      <div class="col-sm-5">
                        <input  type="text" name="title" value="">
                      </div>
                      <div class="col-sm-5">
                        <input placeholder="select date" class="date_picker" type="text" name="date" value="">
                      </div>
                      <div class="col-sm-2">
                        <button class="button" type="submit" name="button">add</button>
                      </div>

                    </div>

                  </div>
                </form>

                <div class="col-sm-10">
                  <ul class="grid">
                    <?php
                    while ($row=mysqli_fetch_assoc($result)) {
                      if ($row['done']==='1') {
                        $class_name='active';
                      }else {
                        $class_name='deactive';
                      }
                      ?>

                      <li onclick="done(this,<?php echo $row['id'] ?>)" style="cursor:pointer" class="line <?php echo $class_name; ?>">
                        <b><?php echo $row['title'] ?></b>
                        <small>[<?php echo $row['date'] ?>]</small>
                      </li>

                    <?php   } ?>

                  </ul>
                </div>
                <div class="col-sm-2">
                  <button  onclick="popup()" class="plus" type="button" name="button"></button>
                </div>
              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
        require_once 'inc/db.php';
        $sql="SELECT * FROM expanse where project_id='$id'";
        $result=mysqli_query($link,$sql);

     ?>
    <div class="row">
      <div class="col-sm-4">
        <div class="wrap padding">
          <div class="card ">
            <div class="container-fluid">
              <div class="row">
                <div class="head">
                  <h3>collection</h3>
                </div>
                <form class="" action="inc/calmoney.php?id=<?php echo $id; ?> " method="post">
                  <div  id='green'  class="inactive">
                      <div class="add">
                        <div class="col-sm-5">
                          <input  type="text" name="collection" value="">
                        </div>
                        <div class="col-sm-5">
                          <input  placeholder="select date" class="date_picker" type="text" name="date" value="">
                        </div>
                        <div class="col-sm-2">
                          <button class="button green" type="submit" name="button">add</button>
                        </div>

                      </div>

                  </div>
                </form>
                <div class="col-sm-10">
                  <ul class="log">

                    <?php
                    $c=0;
                    while ($row=mysqli_fetch_assoc($result)) {
                      if ($row['collection']!=='0') {
                      ?>

                      <li class="list" ><?php echo $row['collection'] ?></li>
                  <?php
                  $c= $row['collection']  + $c;
                } }?>

                  <span><?php echo $c ?></span>
                  </ul>
                </div>
                <div class="col-sm-2">
                  <button  onclick="green()" class="plus green" type="button" name="button"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
          require_once 'inc/db.php';
          $sql="SELECT * FROM expanse where project_id='$id'";
          $result=mysqli_query($link,$sql);

       ?>
      <div class="col-sm-4">
        <div class="wrap padding">
          <div class="card ">
            <div class="head">
              <h3>expenses</h3>
            </div>
            <div class="container-fluid">
              <div class="row">
                <form class="" action="inc/calmoney.php?id=<?php echo $id; ?> " method="post">
                  <div  id='red'  class="inactive">
                      <div class="add">
                        <div class="col-sm-5">
                          <input  type="text" name="expanse" value="">
                        </div>
                        <div class="col-sm-5">
                          <input  placeholder="select date" class="date_picker" type="text" name="date" value="">
                        </div>
                        <div class="col-sm-2">
                          <button class="button red" type="submit" name="button">add</button>
                        </div>

                      </div>

                  </div>
                </form>
                <div class="col-sm-10">
                  <ul class="log">

                    <?php
                    $s=0;
                    while ($row=mysqli_fetch_assoc($result)) {
                      if ($row['expanse']!=='0') {
                      ?>

                      <li class="list minus" ><?php echo $row['expanse'] ?></li>
                  <?php
                  $s= $row['expanse']  + $s;
                } }?>

                  <span><?php echo $s ?></span>
                  </ul>
                </div>
                <div class="col-sm-2">
                  <button  onclick="red()" class="plus red" type="button" name="button"></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<div class="modal fade" id="projectmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Do you really want to delete the project ?
      </div>
      <div class="modal-footer">
        <input id="delete_project" type="hidden" name="" value="">
        <button onclick="deleteproject()" type="button" class="btn btn-primary">yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
      </div>
    </div>
  </div>
</div>

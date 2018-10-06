<?php
  require_once 'inc/db.php';
   $date= date("d-m-Y");
  $sql="SELECT info.id,info.date,info.query,info.followup,info.comment as info_comment,info.status as info_status,
        client.time,client.name,client.company,client.contact,client.email,client.status as client_status,client.comment as client_comment
        FROM info LEFT JOIN client ON info.client_id = client.id
        where info.type='query' AND info.followup='$date' OR info.type='' AND info.followup='$date'";
  $result=mysqli_query($link,$sql);

 ?>

<div id="db">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>dashboard</h3>
        <p>info about your website</p>
      </div>
      <div class="col-sm-6">
        <div class="wrap">
          <div class="card">
        <div class="head">
            <h3>follow ups</h3>
        </div>

        <?php
        while ( $row=mysqli_fetch_assoc($result)) {
         ?>
          <a data-target='#mymodal' data-toggle="modal" onclick="ajax_fetch_query(<?php echo $row['id'] ?>)">
              <h4> with <b><?php echo $row['name'] ?>
              </b> owner of <b>
                <?php echo $row['company'] ?>
              </b> contact no-<b>
                <?php echo $row['contact'] ?>
              </b>. <br>
            </h4>
          </a>
         <?php } ?>
          </div>

        </div>
      </div>

      <?php
      $sql="SELECT * FROM info where type='query' OR  type=''";
      $result=mysqli_query($link,$sql);
       ?>

      <div class="col-sm-3">
        <div class="wrap">
          <div class="card">
            <div class="head">
                <h3>stats</h3>
            </div>
            <?php
            $i=0;
            while ( $row=mysqli_fetch_assoc($result)) {
            ?>
             <?php $i++;} ?>
          <h5> queries generated- <b><?php echo $i;?></b>.</h5>
          </div>
        </div>
    </div>

    </div>
    <!-- <div class="row">
      <div class="col-sm-8">
        <div class="wrap">
          <div class="box">

          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="wrap">
          <div class="box">

          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>
<?php include('modal.php') ?>

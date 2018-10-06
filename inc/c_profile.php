<?php
  $id =$_GET['id'];
    require_once 'inc/db.php';
    $sql="SELECT * FROM client where id='$id'";
      $result=mysqli_query($link,$sql);
      $row=mysqli_fetch_assoc($result);
 ?>

 <div id="pv">
   <div class="container-fluid">
       <div class="row">
         <div class="heading">
           <h3>detailed client information</h3>
         </div>
       </div>
     <div class="row">
       <div class="col-sm-6">
         <div class="wrap padding">
           <div class="card">
             <div class="container-fluid">
               <div class="row">

                   <div class="info">
                     <ul>
                       <div class="col-sm-6">

                       </div>
                       <div class="col-sm-6">
                         <li>date - <span><?php echo $row['time'] ?></span> </li>
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

                         <li>email - <span><?php echo $row['email'] ?></span> </li>

                       </div>
                       <div class="col-sm-6">

                         <li>status - <span><?php echo $row['status'] ?></span> </li>

                       </div>
                       <div class="col-sm-6">
                       <li>   <button onclick="c_profile(<?php echo $row['id'] ?>)" data-target='#clientmodal' data-toggle='modal' type="submit" id="button">delete</button> </li>

                     </ul>
                   </div>
                 </div>

             </div>
           </div>
         </div>
       </div>
       <?php
       $sql="  SELECT * FROM info WHERE client_id='$id'";
       $result=mysqli_query($link,$sql);
        ?>
        <div class="col-sm-3">
          <div class="wrap padding">
            <div class=" card">
              <?php
              $n=0;
              while (mysqli_fetch_assoc($result)) {?>
              <?php $n++;       } ?>
    <div class="info">
      <ul>
        <li style="font-size:14px;">no. of queries- <span style="font-size:16px;"><?php echo $n ?></span> </li>
      </ul>
    </div>
            </div>
          </div>
        </div>
        <?php
           $sql="SELECT info.client_id,info.type,
                 expanse.date,expanse.expanse,expanse.collection,
                 sum(expanse.collection),sum(expanse.expanse)
                 FROM info LEFT JOIN expanse ON info.id = expanse.project_id WHERE info.client_id='$id'";
           $result=mysqli_query($link,$sql);
           $row=mysqli_fetch_assoc($result);
        ?>
        <div class="col-sm-3">
          <div class="wrap padding">
            <div class="card">
              <div class="info">
                <ul>
                    <li style="font-size:13.5px;">total collection - <span style="font-size:16px;color:#2196f3"><?php echo $row['sum(expanse.collection)'] ?></span> </li>
                    <li style="font-size:13.5px;">total expense - <span style="font-size:16px;color:#F44336"><?php echo $row['sum(expanse.expanse)'] ?></span> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

     </div>






   </div>


 </div>
 </div>

 <div class="modal fade" id="clientmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
     <div class="modal-content">
       <div class="modal-body">
         Do you really want to delete the client profile ?
       </div>
       <div class="modal-footer">
         <input id="c_profile" type="hidden" name="" value="">
         <button onclick="deleteprofile()" type="button" class="btn btn-primary">yes</button>
         <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
       </div>
     </div>
   </div>
 </div>

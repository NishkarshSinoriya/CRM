<?php
  require_once 'inc/db.php';
  $sql=" SELECT *  FROM client";
  $result=mysqli_query($link,$sql);
 ?>


<div id="user">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>list of clients</h3>
        <p>all clients are listed here</p>
      </div>
      <div class="col-sm-11">
        <div class="card">
          <table>
            <thead>
              <tr>
                <th>date</th>
                <th>client name</th>
                <th>company name</th>
                <th>contact no.</th>
                <th>email</th>
                <th>status</th>
                <th>actions</th>

              </tr>
            </thead>
            <tbody>
              <?php

              while (  $row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php echo $row['time'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['company'] ?></td>
                  <td><?php echo $row['contact'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                  <td>
                    <select id="client_status<?php echo $row['id'] ?>" class="input" name="" onchange="ajax_update_cstatus('<?php echo $row['id'] ?>')">

                   <?php
                     $options_group=array('ex','current');
                     if ($row['status']!==''){ ?>
                       <option value=""> <?php echo $row['status'];?></option>
                   <?php }else { ?>
                       <option value="">select</option>
                   <?php } ?>
                      <?php
                         for ($j=0; $j < count($options_group); $j++) {
                         if ($options_group[$j]!==$row['status']) { ?>
                           <option value="<?php echo $options_group[$j] ?>"><?php echo $options_group[$j] ?></option>
                       <?php  } } ?>
                    </select>
                  </td>
                  <td>  <a href="clientprofile.php?id=<?php echo $row['id'] ?>"> <button type="button" name="button">view profile</button>   </td>
                </tr>
              <?php } ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

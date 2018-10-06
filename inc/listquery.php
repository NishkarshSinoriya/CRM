<?php
  require_once 'inc/db.php';
  $sql="SELECT info.id,info.date,info.query,info.followup,info.comment as info_comment,info.status as info_status,
        client.time,client.name,client.company,client.contact,client.email,client.status as client_status,client.comment as client_comment
        FROM info LEFT JOIN client ON info.client_id = client.id
        where info.type='' OR info.type='query'";
  $result=mysqli_query($link,$sql);

 ?>

<div id="lq">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>query list</h3>
        <p>all the queries are listed here</p>
      </div>

        <div class="col-sm-11">
          <div class="card">
            <table>
          <thead>
            <tr>
              <th>s.no</th>
              <th>name</th>
              <th>contact no.</th>
              <th>e-mail</th>
              <th>company</th>
              <th>date</th>
              <th>followup date</th>
              <th>query</th>
              <th>comment</th>
              <th>status</th>
              <th>actions</th>
            </tr>
          </thead>
              <tbody>
                <?php
                $i=1;
                while ($row=mysqli_fetch_assoc($result)) {
                 ?>

                 <tr>
                   <td>
                     <?php echo $i; ?>
                     <span id="loading<?php echo $row['id'] ?>" class="loading deactive"></span>
                     <input id="line_id<?php echo $row['id'] ?>" type="hidden" name="" value="<?php echo $row['id']; ?>">
                   </td>
                   <td><?php echo $row['name']; ?></td>
                   <td><?php echo $row['contact']; ?></td>
                   <td><?php echo $row['email']; ?></td>
                   <td><?php echo $row['company']; ?></td>
                   <td><?php echo $row['date']; ?></td>
                   <td>
                     <input style="width:60px;" id="followup<?php echo $row['id'] ?>" class="date_picker" type="text" name="" onchange="followup('<?php echo $row['id'] ?>')" value="<?php echo $row['followup'] ?>">
                   </td>
                   <td><?php echo $row['query']; ?></td>
                   <td><?php echo $row['info_comment']; ?></td>
                   <td>
                     <select id="query_status<?php echo $row['id'] ?>" class="input" name="" onchange="ajax_update_qstatus('<?php echo $row['id'] ?>')">

                    <?php
                      $options_group=array('hot','warm','luke','dead');
                      if ($row['info_status']!==''){ ?>
                        <option value=""> <?php echo $row['info_status'];?></option>
                    <?php }else { ?>
                        <option value="">select</option>
                    <?php } ?>
                       <?php
                          for ($j=0; $j < count($options_group); $j++) {
                          if ($options_group[$j]!==$row['info_status']) { ?>
                            <option value="<?php echo $options_group[$j] ?>"><?php echo $options_group[$j] ?></option>
                        <?php  } } ?>
                     </select>
                   </td>
                  <td> <button onclick="myfunction(<?php echo $row['id'] ?>)" data-target='#modal' data-toggle='modal' type="submit" id="button">delete</button> |
                        <a href="updatecard.php?id=<?php echo $row['id'] ?>"><button type="button" >edit</button></a>
                   </td>

                 </tr>
               <?php $i++; } ?>
              </tbody>

            </table>


        </div>
      </div>


  </div>
  </div>
</div>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Do you really want to delete the query ?
      </div>
      <div class="modal-footer">
        <input id="delete_id" type="hidden" name="" value="">
        <button onclick="delete_query()" type="button" class="btn btn-primary">yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">no</button>
      </div>
    </div>
  </div>
</div>

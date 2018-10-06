<?php
  require_once 'inc/db.php';
  $sql="SELECT info.id,info.date,info.query,info.followup,info.comment as info_comment,info.status as info_status,
        client.time,client.name,client.company,client.contact,client.email,client.status as client_status,client.comment as client_comment
        FROM info LEFT JOIN client ON info.client_id = client.id
        where info.type='project'";
  $result=mysqli_query($link,$sql);

 ?>

<div id="lq">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>project list</h3>
        <p>all the projects are listed here</p>
      </div>
      <form class="" action="" method="post">
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
              <th>query</th>
              <th>comment</th>
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
                   <td><?php echo $row['query']; ?></td>
                   <td><?php echo $row['info_comment']; ?></td>
                  <td> <a href="viewproject.php?id=<?php echo $row['id']; ?>"> <button type="button" name="button">view</button> </a>
                   </td>

                 </tr>
                 <?php
                 $i++; }
                  ?>
              </tbody>
              <div id="demo">
              </div>
            </table>


        </div>
      </div>

    </form>
  </div>
</div>
</div>

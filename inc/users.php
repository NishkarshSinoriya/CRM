<?php
  require_once 'inc/db.php';
  $sql=" SELECT *  FROM  users";
  $result=mysqli_query($link,$sql);

 ?>


<div id="user">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>list of users</h3>
        <p>all registered users are listed here</p>
      </div>
      <div class="col-sm-11">
        <div class="card">
          <table>
            <thead>
              <tr>
                <th>username</th>
                <th>name</th>
                <th>email</th>

              </tr>
            </thead>
            <tbody>
              <?php

              while (  $row=mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                  <td><?php echo $row['username'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo $row['email'] ?></td>
                </tr>
              <?php } ?>


            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

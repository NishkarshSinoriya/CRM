<div id="query">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>edit query</h3>
        <p>fill the form to add edit query</p>
      </div>
      <form class="" action="inc/update.php?id=<?php echo $id ?>" method="post">
        <div class="col-sm-6">
          <div class="card">
            <div class="head">
              <h3>query details</h3>
            </div>

            <div class="col-sm-6">
              <div class="input">
                  <label for="">name</label>
                  <input type="text" name="name" value="<?php echo $row['name'] ?>">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">contact no.</label>
                  <input type="text" name="contact" value="<?php echo $row['contact'] ?>">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">email</label>
                  <input type="text" name="email" value="<?php echo $row['email'] ?>">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">company name</label>
                  <input type="text" name="company" value="<?php echo $row['company'] ?>">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">date of query</label>
                  <input class="date_picker" type="text" name="date" value="<?php echo $row['date'] ?>">
                </div>
              </div>


              <div class="col-sm-6">
            <div class="input">
                <label for="">query for</label>
                <select class="" name="query">
                  <option value="<?php echo $row['query'] ?>"><?php echo $row['query'] ?></option>
                  <option value="web development">website development</option>
                  <option value="app development">app development</option>
                  <option value="software">software</option>
                  <option value="digital marketing">digital marketing</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
            <div class="input">
                <label for="">status</label>
                <select class="" name="status">
                  <option value="<?php echo $row['info_status'] ?>"><?php echo $row['info_status'] ?></option>
                  <option value="luke">luke</option>
                  <option value="warm">warm</option>
                  <option value="hot">hot</option>
                  <option value="dead">dead</option>
                </select>
              </div>
            </div>
            <div class="col-sm-6">
            <div class="input">
                <label for="">type</label>
                <select class="" name="type">
                  <option value="query">query</option>
                  <option value="project">project</option>
                </select>
            </div>
            </div>
            <div class="col-sm-12">
            <div class="input">
                <label for="">followup date</label>
                <input class="date_picker" type="text" name="followup" value="<?php echo $row['followup'] ?>">
            </div>
            </div>
            <div class="col-sm-12">
            <div class="input">
                <label for="">comment</label>
                <textarea name="comment" rows="4" cols="60"><?php echo $row['info_comment'] ?></textarea>
              </div>
            </div>

              <button type="submit" name="button">submit</button>
      </form>


        </div>
      </div>
    </div>
  </div>
</div>

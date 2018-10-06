<div id="query">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>add client</h3>
        <p>fill the form to add the new client</p>
      </div>
      <form class="" action="inc/addclients.php" method="post">
        <div class="col-sm-6">
          <div class="card">
            <div class="head">
              <h3>client personal info</h3>
            </div>

            <div class="col-sm-6">
              <div class="input">
                  <label for="">  name</label>
                  <input type="text" name="name" value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input">
                  <label for="">company name</label>
                  <input type="text" name="company" value="">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">contact no.</label>
                  <input type="text" name="contact" value="">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">email</label>
                  <input type="text" name="email" value="">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">date</label>
                  <input type="text" name="" value="<?php  echo date('d-m-Y') ?>">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">status</label>
                <select class="" name="status">
                  <option value="">select</option>
                  <option value="ex">ex</option>
                  <option value="current">current</option>
                </select>
                </div>
              </div>
            <div class="col-sm-12">
            <div class="input">
                <label for="">comment</label>
                <textarea name="comment" rows="4" cols="60"></textarea>
              </div>
            </div>

              <button type="submit" name="button">submit</button>
      </form>


        </div>
      </div>
    </div>
  </div>
</div>

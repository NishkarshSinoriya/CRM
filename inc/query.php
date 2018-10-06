<div id="query">
  <div class="container-fluid">
    <div class="row">
      <div class="heading">
        <h3>add query</h3>
        <p>fill the form to add the new query</p>
      </div>
      <form class="" action="inc/input.php" method="post">
        <div class="col-sm-6">
          <div class="card">
            <div class="head">
              <h3>query details</h3>
            </div>


              <div class="col-sm-6">
              <div class="input">
                  <label for="">contact no.</label>
                  <input type="text" name="contact" value="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="input">
                    <label for="">name</label>
                    <input type="text" name="name" value="">
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
                  <label for="">company name</label>
                  <input type="text" name="company" value="">
                </div>
              </div>
              <div class="col-sm-6">
              <div class="input">
                  <label for="">date of query</label>
                  <input class="" type="text" name="" value=" <?php  echo date('d-m-Y') ?>">
                </div>
              </div>


              <div class="col-sm-6">
            <div class="input">
                <label for="">query for</label>
                <select class="" name="query">
                  <option value="">select</option>
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
                  <option value="">select</option>
                  <option value="luke">luke</option>
                  <option value="warm">warm</option>
                  <option value="hot">hot</option>
                  <option value="date">dead</option>
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
                <input class="date_picker" type="text" name="followup" value="">
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
<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

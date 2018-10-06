<div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <span id="flat_load" class="flat_loading"></span>
        <h5 class="modal-title" id="mymodal">query details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="#" method="post">
          <div class="col-sm-6">
            <div class="input">
                <label for="">name</label>
                <input class="input_controller" type="text" name="name" value="">
              </div>
            </div>
            <div class="col-sm-6">
            <div class="input">
                <label for="">contact no.</label>
                <input class="input_controller" type="text" name="contact" value="">
              </div>
            </div>
            <div class="col-sm-6">
            <div class="input">
                <label for="">email</label>
                <input class="input_controller" type="text" name="email" value="">
              </div>
            </div>
            <div class="col-sm-6">
            <div class="input">
                <label for="">company name</label>
                <input class="input_controller" type="text" name="company" value="">
              </div>
            </div>
            <div class="col-sm-6">
            <div class="input">
                <label for="">date of query</label>
                <input class="input_controller date_picker" type="text" name="date" value="">
              </div>
            </div>


        <div class="col-sm-6">
          <div class="input">
              <label for="">query for</label>
              <select class="input_controller" name="query">
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
              <select class="input_controller" name="status">
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
              <select class="input_controller" name="type">
                <option value="query">query</option>
                <option value="project">project</option>
              </select>
          </div>
          </div>
          <div class="col-sm-12">
          <div class="input">
              <label for="">followup date</label>
              <input class="input_controller date_picker" type="text" name="followup" value="">
          </div>
          </div>
          <div class="col-sm-12">
          <div class="input">
              <label for="">comment</label>
              <textarea class="input_controller" name="comment" rows="4" cols="60"></textarea>
              <input class="input_controller" id="query_id" type="hidden" name="" value="">
            </div>
          </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button onclick="ajax_update_query()" type="button" class="btn btn-primary">Save changes</button>
      </div>
    </form>
  </div>
    </div>
  </div>
</div>

function toggle_sidebar()
{
  var sidebar_status = document.getElementById('toggle_sidebar').className;

  if (sidebar_status=='open')
   {
    document.getElementById('toggle_sidebar').className ='closed';
  }

  else
   {
    document.getElementById('toggle_sidebar').className ='open';
  }

}

$(document).ready(function () {
      $('.date_picker').datepicker({
          format: "dd-mm-yyyy",  autoclose: true
      });
  });


function ajax_fetch_query(id) {
  var loading=document.getElementById('flat_load');
  loading.className='flat_loading active';
  console.log(id);

  var xhttp;
  xhttp = new XMLHttpRequest();

  xhttp.open("GET", "handlers/query/ajax_fetch_query.php?id="+id, true);
  xhttp.send();

  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      loading.className="flat_loading";
      var result=JSON.parse(this.responseText);
      var inputs=document.getElementsByClassName('input_controller');
      inputs[0].value=result['name'];
      inputs[1].value=result['contact'];
      inputs[2].value=result['email'];
      inputs[3].value=result['company'];
      inputs[4].value=result['date'];
      inputs[5].value=result['query'];
      inputs[6].value=result['info_status'];
      inputs[7].value=result['type'];
      inputs[8].value=result['followup'];
      inputs[9].innerHTML=result['info_comment'];
      inputs[10].value=result['id'];
    }
  };
}

function ajax_update_query() {
  var query_id = document.getElementById('query_id').value;

  var inputs=document.getElementsByClassName('input_controller');
  var name=inputs[0].value;
  var contact=inputs[1].value;
  var email=inputs[2].value;
  var company=inputs[3].value;
  var date=inputs[4].value;
  var query=inputs[5].value;
  var status=inputs[6].value;
  var type=inputs[7].value;
  var followup=inputs[8].value;
  var comment=inputs[9].value;
  var id=inputs[10].value;
  var xhttp;
  xhttp = new XMLHttpRequest();
  //sending data to url
  xhttp.open("GET", "handlers/query/ajax_update_query.php?id="+query_id+'&name='+name+'&contact='+contact+'&email='+email+'&company='+company+
  '&date='+date+'&query='+query+'&status='+status+'&type='+type+'&followup='+followup+'&comment='+comment+'&id='+id, true);
  xhttp.send();

  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      //if status is ready, outputing content.
      console.log(this.responseText);
    }
  };
}


function myfunction(id) {
  document.getElementById('delete_id').value=id;
}

function delete_query() {
  var id=document.getElementById('delete_id').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/delete.php?id="+id, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
     window.location="querylist.php";
    }
  };
}
function project(id) {
  document.getElementById('delete_project').value=id;
}

function deleteproject(){
  var id=document.getElementById('delete_project').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/deleteproject.php?id="+id, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
      window.location="projectlist.php";
    }
  };
}

function c_profile(id) {
  document.getElementById('c_profile').value=id;
}

function deleteprofile(){
  var id=document.getElementById('c_profile').value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/deleteprofile.php?id="+id, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
      window.location="clientlist.php";
    }
  };
}

function done(ele,id){
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "handlers/query/done.php?id="+id, true);
  xhttp.send();
  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200) {
      ele_status=ele.className;
      if (ele_status==='line deactive') {
        ele.className='line active';
      }
      else {
        ele.className='line deactive';
      }
    }
  };
}

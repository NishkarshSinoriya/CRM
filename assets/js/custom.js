function ajax_update_qstatus(edit_this_id)
{
  //geting value from frontend
  var value=document.getElementById('query_status'+edit_this_id).value;
  var line_id=document.getElementById('line_id'+edit_this_id).value;
  var target_loading_e=document.getElementById('loading'+edit_this_id);
  target_loading_e.className='loading';
  //creating instance of xhttp request
  var xhttp;
  xhttp = new XMLHttpRequest();
  //sending data to url
  xhttp.open("GET", "handlers/query/ajax_status.php?value="+value+"&line_id="+line_id, true);
  xhttp.send();

  xhttp.onreadystatechange = function()
  {
    if (this.readyState == 4 && this.status == 200)
    {
      //if status is ready, outputing content.
      console.log(this.responseText);
      target_loading_e.className='loading deactive';
    }
  };
}

function ajax_update_cstatus(edit_this_id)
{
  //geting value from frontend
  var value=document.getElementById('client_status'+edit_this_id).value;
  var xhttp;
  xhttp = new XMLHttpRequest();
  //sending data to url
  xhttp.open("GET", "handlers/query/ajax_client_status.php?value="+value+"&id="+edit_this_id, true);
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

function followup(xyz)
{
  //geting value from frontend
  var date=document.getElementById('followup'+xyz).value;
  // creating instance of xhttp request
  var xhttp;
  xhttp = new XMLHttpRequest();
  //sending data to url
  xhttp.open("GET", "handlers/query/date.php?date="+date+"&line_id="+xyz, true);
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

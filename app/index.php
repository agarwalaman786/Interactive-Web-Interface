<?php
//index.php

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Comment System using PHP and Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  #particles-js {
    position : fixed;
    width:100%;
    height:100%;
    z-index:-1;
    background: #8c8c8c;
    background-attachment: fixed;
    margin-top: -22px;
}
</style>
 </head>
 <body style="background-attachment: fixed;background-position: all;">
  <div id = "particles-js" style="height: 337%;"></div>
  <script type = "text/javascript" src= "particles.min.js"></script>
  <script type = "text/javascript" src = "app.js"></script>
  <button class="btn btn-info" style="background-color: #666666;border:0px solid black;position: fixed;margin-top: -20px;" ><a href="page.php" style="color: white; text-decoration: none;">Close</a></button>
  <center><h1>Discussion</h1></center><br><br>
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" style="background-color: #666666; border:0px solid black;" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
});
function myfunction()
{
var d=new Date();
var t1=new Date();
t1.setHours(18,0,0);
var t2=new Date();
t2.setHours(20,0,0);
if(d>=t1 && d<=t2)
{
alert("HELLO");
document.getElementById("btn").disabled=false;
}
else
{
alert("TIME");
document.getElementById("btn").disabled=true;
}
}
</script>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
function myfunction()
{
var d=new Date();
var t1=new Date();
t1.setHours(17,0,0);
var t2=new Date();
t2.setHours(20,00,0);
if(d>=t1 && d<=t2)
{
	window.open("index.php");
document.getElementById("btn").disabled=false;
}
else
{
alert("TIMEOUT for discussion");
document.getElementById("btn").disabled=true;
}
}
</script>
<style>
.btn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
</style>
</head>
<body>
<button class="btn"><i class="fa fa-comments" onclick="myfunction()" id="btn"> Download</i></button>
</body>
</html>
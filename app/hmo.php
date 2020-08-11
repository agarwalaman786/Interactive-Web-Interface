<!DOCTYPE html>
<html>
<head>
	<title>Public Health</title>
	<link rel="stylesheet" type="text/css" href="dropdown.css">
	<link rel="stylesheet" type="text/css" href="pager.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		
		.fa {
		  padding: 10px;
		  width: 50px;
		  margin: 5px 6px;
		  border-radius: 50%;
		  height: 50px;
		}

		.fa:hover {
		    opacity: 0.7;
		}
		
		.navbar{

  position: fixed;
  z-index: 1;
  top: 0;
 
}
.navbar a {
  float: left;
  font-size: 24px;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
 
}
a.active{
  background-color:inherit;
  text-decoration: underline;
}
.dropdown .dropbtn {
  font-size: 24px;  
  border: none;
  outline: none;
  color: black;
  padding: 14px 10px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  text-decoration:underline;
}

.dropdown-content {
  display: none;
  position: absolute;
  min-width: 160px;
  z-index: 1;
  box-shadow: 0px 8px 16px 0px;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}
.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
</head>
	<body>

	<!--Dropdown box -->
	<div class="navbar">
  <a href="page.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn">Research</button>
    <div class="dropdown-content">
      <a href="Public_Health.php">Public Health</a>
      <a href="#">Clinical</a>
      <a href="#">Pysological</a>
      <a href="#">Genetical</a>
      <a href="#">Preventional</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn" class="active">Group</button>
    <div class="dropdown-content">
      <a href="#">HMO</a>
      <a href="#">PPO</a>
      <a href="#">HDHP</a>
    </div>
  </div>

  <div class="dropdown">
    <button class="dropbtn">Publications</button>
    <div class="dropdown-content">
      <a href="#">Digital</a>
      <a href="#">Environment</a>
      <a href="#">Children</a>
    </div>
  </div> 

  <div class="dropdown">
    <button class="dropbtn">More</button>
    <div class="dropdown-content">
      <a href="#New">Recent News</a>
      <a href="#video">Video</a>
    </div>
  </div> 
  </div>
	<center><h1><br>Health Maintenance Organization (HMO)</h1></center><br><br>
	<p><center>An individual that needs to secure his or her own health insurance plan may find a variety of <br>health insurance providers with unique features. One type of insurance provider that is popular<br> in the health insurance marketplace is the health maintenance organization (HMO)<br> which includes a network of physicians under its coverage.
	</center></p>
	
	<div id = "container" style="margin-top: 40%; margin-left: 95%;">
		<div id="discuss">	
			<button class="button" onclick="myfunction1()" id="btn" style="background-color: #0099ff; margin-left: -99%; font-size: 28px"><i class="fa fa-comments"></i></button>
		</div>
	</div>

	<script type="text/javascript">
		function myfunction1()
		{
			var d=new Date();
			var t1=new Date();
			t1.setHours(18,0,0);
			var t2=new Date();
			t2.setHours(20,0,0);
			if(d>=t1 && d<=t2)
			{
			    window.open("index.php" , "_self");
				document.getElementById("btn").disabled=false;
			}
			else if(d<=t1)
			{
				alert("Discussion Forum will be start at 6pm!!!");
			}
		  else
		  {
		    alert("Discussion Forum will start tomarrow");
		  }
		}
	</script>
</body>
</html>
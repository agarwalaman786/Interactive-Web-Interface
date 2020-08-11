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
	<body style="background-image: url(public.jpg); background-size: 100%">

	<!--Dropdown box -->
	<div class="navbar">
  <a href="page.php">Home</a>
  <div class="dropdown">
    <button class="dropbtn" class="active">Research</button>
    <div class="dropdown-content">
      <a href="#">Public Health</a>
      <a href="#">Clinical</a>
      <a href="#">Pysological</a>
      <a href="#">Genetical</a>
      <a href="#">Preventional</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">Group</button>
    <div class="dropdown-content">
      <a href="hmo.php">HMO</a>
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
	<center><h3><br><br>India has entered a new era in public health during the past ten years.<br>Thanks to improvements across the spectrum of health and <br>development, average life expectancy has risen steadily from 64 to 68 years<br> between 2005 and 2015.But we must continue to build on this progress.<br> India still ranks 154th out of 195 countries in terms of quality and accessibility<br> of health care, according to a recent Lancet study.</h3></center>
	
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
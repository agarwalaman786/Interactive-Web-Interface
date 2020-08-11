<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="pager.css">
<link rel="stylesheet" type="text/css" href="dropdown.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">

      var x;
  var settings = {
     "async": true,
     "crossDomain": true,
     "url": "https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=d5c128d3c32c4c6dae608abc9e57ee1c",
     "method": "GET"
   }

   $.ajax(settings).done(function (response) { 
    var i=0;
    var count =0;
    var url1=[];
    var urlToImage1 =[];
    var title1 = [];
    var h = response.totalResults;
    var l ;

    for(i=0;i<h;i++)
    {
      if(response.articles[i].urlToImage!=null){
        urlToImage1.push(response.articles[i].urlToImage);
        url1.push(response.articles[i].url);
        title1.push(response.articles[i].title);
        count++;
      }
      if(count==9){
        break;
      }
    }

    var x1 = url1[1];
    var y1 = urlToImage1[1];
    var z1 = title1[1];
    var img1 = new Image();
    img1.src = y1;
    img1.title = z1;
    img1.style.height = "300px";
    img1.style.width = "330px";
    img1.onclick = function() {
    window.location.href = x1;
    };
    document.getElementById("div1").appendChild(img1);
    var x11 = title1[1];
    document.getElementById("div11").innerHTML = x11;
   
    var x2 = url1[2];
    var y2 = urlToImage1[2];
    var z2 = title1[2];
    var img2 = new Image();
    img2.src = y2;
    img2.title = z2;
    img2.style.height = "300px";
    img2.style.width = "330px";
    img2.onclick = function() {
    window.location.href = x2;
    };
    document.getElementById("div2").appendChild(img2);
    var x21 = title1[2];
    document.getElementById("div21").innerHTML = x21;
   
    var x3 = url1[3];
    var y3 = urlToImage1[3];
    var z3 = title1[3];
    var img3 = new Image();
     img3.src = y3;
      img3.title = z3;
     img3.style.height = "300px";
    img3.style.width = "330px";
    img3.onclick = function() {
    window.location.href = x3;
    };
    document.getElementById("div3").appendChild(img3);
    var x31 = title1[3];
    document.getElementById("div31").innerHTML = x31;

    var x4 = url1[4];
    var y4 = urlToImage1[4];
    var z4 = title1[4];
    var img4 = new Image();
     img4.src = y4;
      img4.title = z4;
     img4.style.height = "300px";
    img4.style.width = "330px";
    img4.onclick = function() {
    window.location.href = x4;
    };
    document.getElementById("div4").appendChild(img4);
    var x41 = title1[4];
    document.getElementById("div41").innerHTML = x41;

    var x5 = url1[5];
    var y5 = urlToImage1[5];
    var z5 = title1[5];
    var img5 = new Image();
     img5.src = y5;
      img5.title = z5;
     img5.style.height = "300px";
    img5.style.width = "330px";
    img5.onclick = function() {
    window.location.href = x5;
    };
    document.getElementById("div5").appendChild(img5);
    var x51 = title1[5];
    document.getElementById("div51").innerHTML = x51;

    var x6 = url1[6];
    var y6 = urlToImage1[6];
    var z6 = title1[6];
    var img6 = new Image();
     img6.src = y6;
      img6.title = z6;
      img6.style.height = "300px";
    img6.style.width = "330px";
    img6.onclick = function() {
    window.location.href = x6;
    };
    document.getElementById("div6").appendChild(img6);
    var x61 = title1[6];
    document.getElementById("div61").innerHTML = x61;

    var x7 = url1[7];
    var y7 = urlToImage1[7];
    var z7 = title1[7];
    var img7 = new Image();
     img7.src = y7;
      img7.title = z7;
      img7.style.height = "300px";
    img7.style.width = "330px";
    img7.onclick = function() {
    window.location.href = x7;
    };
    document.getElementById("div7").appendChild(img7);
    var x71 = title1[7];
    document.getElementById("div71").innerHTML = x71;

    var x8 = url1[8];
    var y8 = urlToImage1[8];
    var z8 = title1[8];
    var img8 = new Image();
     img8.src = y8;
      img8.title = z8;
      img8.style.height = "300px";
    img8.style.width = "330px";
    img8.onclick = function() {
    window.location.href = x8;
    };
    document.getElementById("div8").appendChild(img8);
    var x81 =title1[8];
    document.getElementById("div81").innerHTML = x81;
    });
   
		var x;
    var settings = {
     "async": true,
     "crossDomain": true,
     "url": "https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=d5c128d3c32c4c6dae608abc9e57ee1c",
     "method": "GET"
    }
    $.ajax(settings).done(function (response) {
      var i=0;
      var count =0;
      var url1=[];
      var urlToImage1 =[];
      var title1 = [];
      var h = response.totalResults;
      var l;

    for(i=0;i<h;i++)
    {
      if(response.articles[i].urlToImage!=null){
        urlToImage1.push(response.articles[i].urlToImage);
        url1.push(response.articles[i].url);
        title1.push(response.articles[i].title);
        count++;
      }
      if(count==9){
        break;
      }
    }
       
    var x0 = url1[0];
    var y0 = urlToImage1[0];
    var z0 = title1[0];
    var img0 = new Image();
     img0.src = y0;
      img0.title = z0;
      img0.style.height = "80%";
    img0.style.width = "80%";
    img0.onclick = function() {
    window.location.href = x0;
    };
    document.getElementById("pop").appendChild(img0);
    var x81 = response.articles[0].title;
    document.getElementById("pop1").innerHTML = x81;
    });

  function myfunction(){
    document.getElementById("x").style.display = "none";
  }
</script>
<style>
body{
margin:0;
padding:0;
height:100vh;
}
#slide img{
  opacity:0.7;
}
#slide img:hover{
  opacity: 1.0;
}
#particles-js {
    position : absolute;
    width:100%;
    height:100%;
    z-index:-1;
    background: #8c8c8c;
}

.fa {
  padding: 10px;
  font-size: 30px;
  width: 45px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);
  color: white;
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
  <div id = "particles-js" style="height: 340%;"></div>
  <script type = "text/javascript" src= "particles.min.js"></script>
  <script type = "text/javascript" src = "app.js"></script>

  
  <div class="navbar">
  <a href="#home" class="active">Home</a>
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

	<div id="container" style="height: 60%; margin-top: 1%; margin-left: 75%;  position: absolute;">
  <div id = "x" style = "box-shadow: 0px 8px 16px 0px;z-index:1;display:none;width:19%; margin-top:0%; height:32%; float:left; background-color:white;margin-left: 0%; position:fixed;cursor: pointer;">
    <button onclick = "mypop()" style="float:right;background-color: transparent;border:0px;"> <i style="font-size: 14px;"class="fa fa-close"></i></button>
    <div id="pop"></div> <div id="pop1"></div>
  </div>
  </div>

<div id="container" style="height: 500px; margin-top: 20%; margin-left: 40%; position: absolute;">
  <marquee width="160%" direction="left" style="font-size: 250%; font-family: Arial;">Eat For The Body You Want Not For Body You Have</marquee>
</div>
  <!--Slider-->
	<div class="slideshow-container" style="margin-left: 0;margin-right: 0;">
		
	<div style="margin-top: 0%;margin-right: 0px;width: 89.6%">

    <div class="mySlides fade"><a id="slide" href="https://www.healthyeating.org/Healthy-Eating/All-Star-Foods/Fruits"><img src="health3.jpg" width="223%" height="720px"></a></div>

    <div class="mySlides fade"><a id="slide" href="https://www.healthyeating.org/Healthy-Eating/All-Star-Foods/Fruits"><img src="health4.jpg" width="223%" height="720px"></a></div>

    <div class="mySlides fade"><a id="slide" href="https://www.healthyeating.org/Healthy-Eating/All-Star-Foods/Fruits"><img src="health1.jpeg" width="223%" height="720px"></a></div>
   
    <div class="mySlides fade"><a id="slide" href="https://www.healthyeating.org/Healthy-Eating/All-Star-Foods/Fruits"><img src="health5.jpg" width="223%" height="720px"></a></div>
    
    <div class="mySlides fade"><a id="slide" href="https://www.healthyeating.org/Healthy-Eating/All-Star-Foods/Fruits"><img src="health6.jpg" width="223%" height="720px"></a></div>
    
	<div class="mySlides fade"><a id="slide" href="https://www.healthyeating.org/Healthy-Eating/All-Star-Foods/Fruits"><img src="health2.jpg" width="223%" height="720px"></a></div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a style = "margin-right:-99.8%;" class="next" onclick="plusSlides(1)">&#10095;</a>
 
	</div>
  </div>
	
	<div id = "container" style="height: 30%; margin-top: 46%; margin-left: 34%; position: absolute;">
	  <div style="text-align:center">
	    <span style = "margin-left: 56%;" class="dot" onclick="currentSlide(1)"></span> 
	    <span class="dot" onclick="currentSlide(2)"></span> 
	    <span class="dot" onclick="currentSlide(3)"></span> 
	    <span class="dot" onclick="currentSlide(4)"></span> 
	    <span class="dot" onclick="currentSlide(5)"></span>  
	    <span class="dot" onclick="currentSlide(6)"></span>  
	  </div>
	</div>

  <!--Discussion Box Button-->
  <div id = "container" style="margin-top: 43%; margin-left: 96%;">
	 <div id="discuss">	
	 <button class="button" onclick="myfunction1()" id="btn" style="background-color:  #0099ff; margin-left: -99%"><i class="fa fa-comments"> </i></button>
	 </div>
  </div>

	<div id="New">
		<br><center>
      
  <marquee width="40%" direction="left" style="font-size: 250%; font-family: Arial;">Recent News</marquee>

    </center>
  <br>
    <table>
    <tr>
        <td><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id  = "div1"></div>  <div id="div11" ></div> </div></td>
        <td><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id = "div2" ></div> <div id="div21"></div> </div></td>
        <td><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id="div3"></div>  <div id="div31"></div> </div></td>
        <td><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id="div4"></div>  <div id="div41"></div> </div></td>
    </tr>
    <tr>
        <td><br><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id="div5"></div> <div id="div51"></div></div></td>
        <td><br><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id="div6"></div> <div id="div61"></div></div></td>
        <td><br><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id="div7"></div> <div id="div71"></div></div></td>
        <td><br><div style="width: 330px;cursor: pointer; margin-left:40px;"><div id="div8"></div> <div id="div81"></div></div></td>
    </tr>
    </table>
	</div>

<br><br>
	<div id="video"><br>
	<center>
   <marquee width="40%" direction="left" style="font-size: 250%; font-family: Arial;">
  Healthy Lifestyle</marquee> 
  </center><br>
	<video width="80%" height="10%" style="margin-left: 10%; border: 0px;" controls>
	<source src="Investing in Student Health_ The Importance of Partnerships.mp4" type="video/mp4"  onclick="document.getElementById('modal01').style.display='block'">
	</video>
	   
  <br>
	<br>
	<center>
	<a href="https://www.facebook.com/CDCTanzania/" class="fa fa-facebook"></a>
	<a href="https://www.youtube.com/user/CDCStreamingHealth/about" class="fa fa-youtube"></a>
	<a href="https://instagram.com/centerfordisease?igshid=17ygxyz0lwk8g" class="fa fa-instagram"></a>
	</center><br>
	</div>

<script>
var slideIndex = 0;
showSlides();

function plusSlides(n) {
  Slides(slideIndex += n);
}

function currentSlide(n) {
  Slides(slideIndex = n);
}

function Slides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 10000); 
}
function myfunction1()
{
	var d=new Date();
	var t1=new Date();
	t1.setHours(2,0,0);
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

function mypop(){
document.getElementById("x").style.display = "none";
}
window.onload=function(){
setTimeout(appeardiv,3000)
}
function appeardiv(){
document.getElementById("x").style.display="block";  
}

</script>
</body>
</html>
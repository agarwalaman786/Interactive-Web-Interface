<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="pager.css">
</head>
<body>
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 4</div>
      <img src="NIT-ROURKELA.jpg" width="100%" height="500px">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 4</div>
      <img src="nit-rourkela-647.jpg" width="100%" height="500px">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 4</div>
      <img src="NIT-Rourkela-Alumnus.jpg" width="100%" height="500px">
    </div>
    <div class="mySlides fade">
      <div class="numbertext">4 / 4</div>
      <img src="59565276_2319827354750916_3846199095387488256_o.jpg" width="100%" height="500px">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
  <br>
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    <span class="dot" onclick="currentSlide(4)"></span> 
  </div>
</div>
<button class="button"><i class="fa fa-comments" onclick="myfunction()" id="btn"> </i></button>
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
function myfunction()
{
var d=new Date();
var t1=new Date();
t1.setHours(17,0,0);
var t2=new Date();
t2.setHours(20,50,0);
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
</body>
</html>
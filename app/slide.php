<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="pager.css">
<link rel="stylesheet" type="text/css" href="dropdown.css">
	<style>
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
  background:  #C13584;
  color: white;
}
</style>

</head>
<body>
	
<div id="container" style="height: 30%;">
		<ul>
		<li style="font-weight: 49px;">Home
			<ul>
				<li>Research   <i class="symbol"></i>
				<ul>
					<li>Public Health</li>
					<li>Clinical</li>
					<li>Pysological</li>
					<li>Genetical</li>
					<li>Preventaional</li>
				</ul>
				</li>
				<li>Group   <i class="symbol"></i>
				<ul>
					<li>HMO</li>
					<li>PPO</li>
					<li>HDHP</li>
				</ul>
				</li>
				<li>Publication   <i class="symbol"></i>
				<ul>
					<li>Digital </li>
					<li>Environmental </li>
					<li>Diabetes</li>
					<li>Children </li>
				</ul>
				</li>
				<li>More <i class="symbol"></i>
        <ul>
          <li>Recent News</li>
          <li><a href="#Video">Video</a></li>
        </ul>
      </li>
			</ul>
		</li>
	</ul>
	</div>
	


<div id="container"  style="height: 500px; margin-top: 20%; margin-left: 40%; position: absolute;">
	<h1 id="animatetext">
  <a href="" class="typewrite" data-period="7000" data-type='[ "Fall In Love With Taking Care Of Your Body","Eat For The Body You Want Not For Body You Have","Your Body Is A Reflection Of Your Lifestyle","Get Busy Living or Get Busy Dying", "A Healthy Outside Starts From Inside","Retire From Work Not From Life"]'>
    <span class="wrap"></span>
  </a>
</h1>
</div>
	<div class="slideshow-container" style="margin-left: 0;margin-right: 0;">
		
	<div style="margin-top: 0%;margin-right: 0px;width: 90%">

    <div class="mySlides fade"><img src="health1.jpeg" width="222%" height="660px"></div>

    <div class="mySlides fade"><img src="health2.jpg" width="222%" height="720px"></div>

    <div class="mySlides fade"><img src="health3.jpg" width="222%" height="720px"></div>
   
    <div class="mySlides fade"><img src="health4.jpg" width="222%" height="720px"></div>
    
    <div class="mySlides fade"><img src="health5.jpg" width="222%" height="720px"></div>
    
	<div class="mySlides fade"><img src="health6.jpg" width="222%" height="720px"></div>
    
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

<div id = "container" style="margin-top: 43%; margin-left: 95%;">
	<div id="discuss">	
	<button class="button" id="btn" style="background-color:  #0099ff; margin-left: -99%"><i class="fa fa-comments"> </i></button>
	</div>
</div>


	<div class="video" id="Video" ><br>
	<center><h1 id="animatetext">
  <a href="" class="typewrite" data-period="4000" data-type='["Healthy Lifestyle"]'>
    <span class="wrap"></span>
  </a>
</h1></center><br>
	<video width="890px" height="500px" style="margin-left: 18%" controls>
	<source src="Investing in Student Health_ The Importance of Partnerships.mp4" type="video/mp4"  onclick="document.getElementById('modal01').style.display='block'">
	</video>
	   
<br>
	<br>
	<center>
	<a href="https://www.facebook.com/CDCTanzania/" class="fa fa-facebook"></a>
	<a href="https://www.youtube.com/user/CDCStreamingHealth/about" class="fa fa-youtube"></a>
	<a href="https://instagram.com/centerfordisease?igshid=17ygxyz0lwk8g" class="fa fa-instagram"></a>
	</center>
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


	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };


</script>
</body>
</html>
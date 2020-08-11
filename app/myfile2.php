<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <title>Sample Page</title>
      <script>

      var x;
         var settings = {
           "async": true,
           "crossDomain": true,
           //"url": "https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=5eb572c7e4454461bb8265df93cbbbe6",
           "url": "https://newsapi.org/v2/top-headlines?country=in&category=health&apiKey=d5c128d3c32c4c6dae608abc9e57ee1c",
           "method": "GET"
         }
         $.ajax(settings).done(function (response) {
          
        var x1 = response.articles[0].url;
        var y1 = response.articles[0].urlToImage;
        var z1 = response.articles[0].title;
        var img1 = new Image();
         img1.src = y1;
         img1.title = z1;
         img1.style.height = "300px";
        img1.style.width = "350px";
        img1.onclick = function() {
        window.location.href = x1;
        };
        document.getElementById("div1").appendChild(img1);
        var x11 = response.articles[0].title;
        document.getElementById("div11").innerHTML = x11;


        var x2 = response.articles[1].url;
        var y2 = response.articles[1].urlToImage;
         var z2 = response.articles[1].title;
        var img2 = new Image();
         img2.src = y2;
         img2.title = z2;
         img2.style.height = "300px";
        img2.style.width = "350px";
        img2.onclick = function() {
        window.location.href = x2;
        };
        document.getElementById("div2").appendChild(img2);
         var x21 = response.articles[1].title;
        document.getElementById("div21").innerHTML = x21;

        var x3 = response.articles[3].url;
        var y3 = response.articles[3].urlToImage;
        var img3 = new Image();
         img3.src = y3;
         img3.style.height = "300px";
        img3.style.width = "350px";
        img3.onclick = function() {
        window.location.href = x3;
        };
        document.getElementById("div3").appendChild(img3);

        var x4 = response.articles[4].url;
        var y4 = response.articles[4].urlToImage;
        var img4 = new Image();
         img4.src = y4;
         img4.style.height = "300px";
        img4.style.width = "350px";
        img4.onclick = function() {
        window.location.href = x4;
        };
        document.getElementById("div4").appendChild(img4);

        var x5 = response.articles[5].url;
        var y5 = response.articles[5].urlToImage;
        var img5 = new Image();
         img5.src = y5;
         img5.style.height = "300px";
        img5.style.width = "350px";
        img5.onclick = function() {
        window.location.href = x5;
        };
        document.getElementById("div5").appendChild(img5);

        var x6 = response.articles[6].url;
        var y6 = response.articles[6].urlToImage;
        var img6 = new Image();
         img6.src = y6;
          img6.style.height = "300px";
        img6.style.width = "350px";
        img6.onclick = function() {
        window.location.href = x6;
        };
        document.getElementById("div6").appendChild(img6);

        var x7 = response.articles[7].url;
        var y7 = response.articles[7].urlToImage;
        var img7 = new Image();
         img7.src = y7;
          img7.style.height = "300px";
        img7.style.width = "350px";
        img7.onclick = function() {
        window.location.href = x7;
        };
        document.getElementById("div7").appendChild(img7);

        var x8 = response.articles[8].url;
        var y8 = response.articles[8].urlToImage;
        var img8 = new Image();
         img8.src = y8;
          img8.style.height = "300px";
        img8.style.width = "350px";
        img8.onclick = function() {
        window.location.href = x8;
        };
        document.getElementById("div8").appendChild(img8);

        /* var m= response.articles[10].urlToImage;
         //var m = new Image(); 
        
        var k = new Image();
        k.src = m;
        k.style.height = "100px";


        document.getElementById("div3").appendChild(k);*/

//document.body.appendChild(m);

          //document.getElementById("l").innerHTML=y;
           //document.write("<b>fdjks" +"</b>");
        });
           // document.write("<p>Big: " + txt.big() + "</p>");
         
          //document.write(x);


      </script>
   </head>
   <body>
    <p><center>News</center></p>
      <table cellspacing="24px">
      <tr>
          <td><div id  = "div1"></div>  <div id="div11" ></div> </td>
          <td><div id = "div2" ></div> <div id="div21"></div> </td>
          <td><div id="div3"></div>  <div id="div31"></div></td>
          <td><div id="div4"></div>  <div id="div41"></div></td>
      </tr>
      <tr>
          <td><div id="div5"></div> <div id="div51"></div></td>
          <td><div id="div6"></div> <div id></div></td>
          <td><div id="div7"></div></td>
          <td><div id="div8"></div></td>
      </tr>
    </table>
   </body>
</html>

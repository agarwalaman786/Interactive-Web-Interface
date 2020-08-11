<html>
<head>
<style>
*{
margin: 0px;
padding:0px;
}

#container ul{
list-style:none;
}

#container ul li{
background-color: #00001a;
width:150px;
border:1px solid white;
height:50px;
line-height:50px;
text-align:center;
float:left;
color: white;
font-size: 18px;
position:relative;
}

#container ul li:hover{
background-color: #595959;
}
#container ul ul {
display: none;
}
#container ul li:hover>ul{
display:block;
}
#container ul ul ul {
margin-left: 150px;
top:0px;
position:absolute;
}
i {
  border: solid black;
  border-width: 0 3px 3px 0;
  display: inline-block;
  padding: 3px;
  text-align:right;
}

.right {
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
}
</style>
<meta charset="utf-8">
<title>Document</title>
</head>

<body>
<div id="container">
<ul>
	<li>Home
		<ul>
			<li>Research   <i class="right"></i>
			<ul>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
			</ul>
			</li>
			<li>Group   <i class="right"></i>
			<ul>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
			</ul>
			</li>
			<li>Publication   <i class="right"></i>
			<ul>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
			</ul>
			</li>
			<li>More   <i class="right"></i>
			<ul>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
				<li>Bilal</li>
			</ul>
			</li>
		</ul>
	</li>
</ul>

</div> 
</body>
</html>
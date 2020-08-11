<html>
<head>
<script language="javascript" type="text/javascript">

function showContacts()
{
    var myContacts=["abc","def","xyz"]; // literal array

    for (var i=0;i<myContacts.length;i++)
    {
        document.getElementById('contact').innerHTML += myContacts[i]+"<br>";
        //document.write(myArray[i]);
    }
}
function preloader() 
{
    var myPhoto=["news1.jpeg","NIT-ROURKELA.jpg"]; // literal array
    // create object
    var img=document.getElementById('photo');
    // start preloading
    for(var i=0; i< myPhoto.length; i++) 
    {
        img.src += myPhoto[i]+"<br>";
        //document.write(i);
        //img.setAttribute('src',myPhoto[i]); 
     }
 } 


</script>
</head>
<body onload="showContacts();preloader();">

<table width="100%" style="height: 100%;" border="0"><tr>
    <col colspan="1" ><image id="photo"/>

    <col  colspan="1" ><p id="contact"/>

</tr></table>
</body>
</html>
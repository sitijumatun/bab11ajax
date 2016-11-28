<!DOCTYPE html>
<html>
<?php
    mysql_connect("localhost","root",""); 
    mysql_select_db("user"); 
    $query = mysql_query("select username from tabeluser"); 
?>
<head>
	<title>AJAX CEK ISIAN ID DAN EMAIL</title>
<script> 
var drz, kata, x; 
function cekid(){ 
    kata = document.getElementById("userid").value; 
    if(kata.length>2){ 
        document.getElementById("teks").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekid.php"; 
        url=url+"?q="+kata; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus(); 
         } 
} 
function cekumur(){ 
    umur = document.getElementById("umur").value; 
    if(umur.length>0){ 
        document.getElementById("teks3").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekumur.php"; 
        url=url+"?r="+umur; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged3; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus3(); 
         } 
} 

function stateChanged3(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks3").innerHTML = data; 
    } 
} 
function fokus3(){ 
    document.getElementById("umur").focus(); 
} 

function cekemail(){ 
    email = document.getElementById("email").value; 
    if(email.length>2){ 
        document.getElementById("teks2").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cekemail.php"; 
        url=url+"?w="+email; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged2; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus2(); 
         } 
} 


function buatajax(){ 
    if (window.XMLHttpRequest){ 
        return new XMLHttpRequest(); 
    } 
    if (window.ActiveXObject){ 
        return new ActiveXObject("Microsoft.XMLHTTP"); 
    } 
    return null; 
} 
 

function stateChanged(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks").innerHTML = data; 
    } 
} 


function stateChanged2(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks2").innerHTML = data; 
    } 
} 



function fokus(){ 
    document.getElementById("userid").focus(); 
} 

function fokus2(){ 
    document.getElementById("email").focus(); 
}

 

</script> 
</head>
<body>
<center><h1>SILAKAN ISI FORM DI BAWAH INI</h1></center>
<hr>
<form action="GET">
<pre>
	USERID   : <input type="teks" name="userid" id="userid" onblur=cekid()> <br>
	<span id=teks style="color:red;font-size:8pt"></span> <br> 
	EMAIL    : <input type="teks" name="email" id="email" onblur=cekemail()><br>
	<span id=teks2 style="color:red;font-size:8pt"></span> <br> 
</pre>
<hr>
<marquee>Developed by : Siti Jum'atun - IK2A - 33415021</marquee> 	
</form>
</body>
</html>
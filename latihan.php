<!DOCTYPE html>
<html>
		<?php
			mysql_connect("localhost","root",""); 
			mysql_select_db("user"); 
			$query = mysql_query("select id_prop,prop from prop"); 
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
function stateChanged(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks").innerHTML = data; 
    } 
}
function fokus(){ 
    document.getElementById("userid").focus(); 
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

function stateChanged2(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks2").innerHTML = data; 
    } 
} 
function fokus2(){ 
    document.getElementById("email").focus(); 
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



function ceknama(){ 
    nama = document.getElementById("nama").value; 
    if(nama.length>0){ 
        document.getElementById("teks5").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="ceknama.php"; 
        url=url+"?j="+nama; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged5; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus5(); 
         } 
} 

function stateChanged5(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks5").innerHTML = data; 
    } 
} 
function fokus5(){ 
    document.getElementById("nama").focus(); 
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
 


function cek_kec(){ 
    kec = document.getElementById("prop").value; 
    if(kec.length>0){ 
        document.getElementById("teks4").innerHTML = "checking..."; 
        drz = buatajax(); 
        var url="cek_kab.php"; 
        url=url+"?s="+kec; 
        url=url+"&sid="+Math.random(); 
        drz.onreadystatechange=stateChanged4; 
        drz.open("GET",url,true); 
        drz.send(null); 
    }else{ 
        fokus4(); 
         } 
} 
function stateChanged4(){ 
var data; 
    if (drz.readyState==4){ 
        data=drz.responseText; 
        document.getElementById("teks4").innerHTML = data; 
    } 
} 
function fokus4(){ 
    document.getElementById("prop").focus(); 
}  

</script> 
</head>
<body>
<center><h1>SILAKAN ISI FORM DI BAWAH INI</h1></center>
<hr>
<form action="GET">
<pre>
	USERNAME   		: <input type="teks" name="userid" id="userid" onblur=cekid()> 
	<span id=teks style="color:red;font-size:8pt"></span>
	UMUR    		: <input type="teks" name="umur" id="umur" onblur=cekumur()>
	<span id=teks3 style="color:red;font-size:8pt"></span> 
	NAMA LENGKAP    	: <input type="teks" name="nama" id="nama" onkeypress=ceknama()>
	<span id=teks5 style="color:red;font-size:8pt"></span> 
	PROVINSI   		: <?php 
    if(mysql_num_rows($query)>0){
    echo "<select name='prop' id='prop' onchange=cek_kec()>";
    echo "<option value='0'>Pilih<br>";
    while($row=mysql_fetch_array($query))
    {
        echo "<option value='$row[0]'>$row[1]<br>";
    }
    echo "</select>";
    }
	?>
	<br>
	KABUPATEN    		: <span id=teks4 style="color:red;font-size:8pt"></span>
	<input type="submit" value="MASUKKAN DATA">
</pre>
<hr>
<marquee>Developed by : Siti Jum'atun - IK2A - 33415021</marquee> 	
</form>
</body>
</html>
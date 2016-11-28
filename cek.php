 <?php 
mysql_connect("localhost","root",""); 
mysql_select_db("user"); 
 
$id = $_GET['q'];

 
$query = mysql_query("select user_id from tabeluser where user_id='$id'"); 

 
if(mysql_num_rows($query)==0){ 
    echo "$id belum ada yang pakai"; 
}else{ 
    echo "$id sudah ada yang pakai"; 
}

$email = $_GET['w']; 
$query2 = mysql_query("select email from tabeluser where email='$email'"); 
if(mysql_num_rows($query2)==0){ 
    echo "$email belum ada yang pakai"; 
}else{ 
    echo "$email sudah ada yang pakai"; 
}  
?> 
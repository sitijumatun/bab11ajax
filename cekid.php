 <?php 
mysql_connect("localhost","root",""); 
mysql_select_db("user"); 
 
$id = $_GET['q'];
//$email = $_GET['w']; 
 
$query = mysql_query("select user_id from tabeluser where user_id='$id'"); 
//$query2 = mysql_query("select email from tabeluser where email='$email'"); 
 
if(mysql_num_rows($query)==0){ 
    echo "$id belum ada yang pakai"; 
}else{ 
    echo "$id sudah ada yang pakai"; 
}

//if(mysql_num_rows($query)==0){ 
    //echo "$email belum ada yang pakai"; 
//}else{ 
    //echo "$email sudah ada yang pakai"; 
//}  
?> 
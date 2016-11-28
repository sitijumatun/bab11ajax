 <?php 
mysql_connect("localhost","root",""); 
mysql_select_db("user"); 
 
$email = $_GET['w'];

 
$query2 = mysql_query("select email from tabeluser where email='$email'"); 
 

if(mysql_num_rows($query2)==0){ 
    echo "$email belum ada yang pakai"; 
}else{ 
    echo "$email sudah ada yang pakai"; 
}  
?> 
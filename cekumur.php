<?php

$umur=$_GET['r'];
if(is_numeric($umur)){
	echo "Angka";
}
else
{
	echo "Anda harus menginputkan angka";
}
?>
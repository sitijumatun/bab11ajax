<?php

$nama=$_GET['j'];
if(is_null($nama)){
	echo "Anda harus menginputkan nama anda terlebih dahulu";
}
else
{
	echo " $nama sudah terinput";
}
?>
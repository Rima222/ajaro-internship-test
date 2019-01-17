<?php
	include("connect.php");
	$Id = $_GET['Id'];
	mysql_query("delete from tb_barang where Id='$Id'")or die(mysql_error());
	
	header("location:Tabel.php?pesan=hapus");
?>	
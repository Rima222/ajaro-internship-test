<?php
	include("connect.php");
	$kode		= $_POST["Kode"];
	$nama		= $_POST["Nama"];
	$deskripsi	= $_POST["Deskripsi"];
	$stok		= $_POST["Stok"];
	$harga		= $_POST["Harga"];
	$berat		= $_POST["Stok"];
	
	$ubah=("update tb_barang set Kode='$kode',Nama='$nama',Deskripsi='$deskripsi',Stok='$stok',Harga='$harga',Berat='$berat' where Kode='$kode'");
	$hasil = mysql_query($ubah,$conn);
	header ("location:Tabel.php?");
	?>
<?php
include("connect.php");//koneksi ke Database
$Kode		=$_POST["Kode"];
$Nama		=$_POST["Nama"];
$Deskripsi	=$_POST["Deskripsi"];
$Stok		=$_POST["Stok"];
$Harga		=$_POST["Harga"];
$Berat		=$_POST["Berat"];
	//kondisi jika data masih ada yang kosong harus diisi terlebih dahulu
if (trim($Kode)=="") {
	echo "Kode masih kosong, isi dengan benar";
	}
	elseif (trim($Nama)=="") {
		echo "Nama masih Kosong,isi dengan benar";
		}
	elseif(trim($Deskripsi)=="") {
		echo "deskripsi masih kosong,isi dengan benar";
		}
	elseif(trim($Stok)=="") {
		echo "Stok masih kosong,isi dengan benar";
	}
	elseif(trim($Harga)=="") {
		echo "Harga masih kosong,isi dengan benar";
	}
	elseif(trim($Berat)=="") {
		echo "Berat masih kosong,isi dengan benar";
	}
	else{
	$input="insert into tb_barang (Kode,Nama,Deskripsi,Stok,Harga,Berat)
		values ('$Kode','$Nama','$Deskripsi','$Stok','$Harga','$Berat')";
	$hasil =mysql_query($input,$conn);
	header("location:Tabel.php");
	}
	?>
	
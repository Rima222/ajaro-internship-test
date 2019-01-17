<html>
	<head>
		<title>EDIT DATA BARANG</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
	<H2> EDIT DATA BARANG </H2>
	
	<?php 
	include("connect.php");
	$id = $_GET['id'];
	$query_mysql = mysql_query("select * from tb_barang where id='$id'")or die(mysql_error());
	while($data = mysql_fetch_array($query_mysql)){
	?>
	
		<form action="update.php" method="post" p align="center">
		<table  width=40% height=10%  border="0" cellpadding="0" cellspacing="0" p align="center">
			<tr>
				<td> <b> Edit Data Barang </b></td>
			</tr>
			</table>
		<table  width=40% height=40%  border="0" cellpadding="0" cellspacing="0" p align="center">
			<tr>
				<td width=20%> Kode :  </td> 
				<td><input  class="t" type="text" name="Kode" readonly value="<?php echo $data['Kode'] ?>"></td>
			</tr>
			<tr>
				<td>Nama : </td> 
				<td><input class="t" type="text" name="Nama" value="<?php echo $data['Nama'] ?>"></td> 
			</tr>
			<tr>
				<td>Deskripsi: </td> 
				<td><textarea class="t" name="Deskripsi"><?php echo $data['Deskripsi'] ?></textarea></td> 
			</tr>
			<tr>
				<td>Stok: </td> 
				<td><input class="t" type="text" name="Stok" value="<?php echo $data['Stok'] ?>"></td> 
			</tr>
			<tr>
				<td>Harga: </td> 
				<td><input class="t" type="text" name="Harga" value="<?php echo $data['Harga'] ?>"></td> 
			</tr>
			<tr>
				<td>Berat: </td> 
				<td><input class="t" type="text" name="Berat" value="<?php echo $data['Berat'] ?>"><i>gram</i></td> 
			</tr>
			<tr>
				<td colspan="2" p align="center" height=10%> <input class="button" type=submit value="Update"></td>
			</tr>
			</form>
		</table>
		<?php
			}
		?>
	</body>
</html>
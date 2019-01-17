<html>
	<head>
	<title>Kelola Data Barang</title>
	<link rel="stylesheet" href="Css.css" type="text/css">
	</head>
	<body>
		<h3><div class ="jdl">Kelola Data Barang</div></h3>
		<br>
	<br>
	<table width=80% height=5% align="center">
	<tr>
		<td><b>Data Barang</b></td>
		<td><p align="right"><a href=Input.php><button class ="btn">Tambah</button>
		</tr>
		</table>
		<br>
		<table width=80% height=40% align="center" border =1 cellpadding=0 cellspacing=0>
		<tr align = "center">
		<td>Kode</td>
		<td>Nama</td>
		<td>Harga</td>
		<td>Aksi</td>
		</tr>
		
			
				<?php
				//koneksi ke database
				include("connect.php");
				//mengambil data dari tabel barang
				$tampil = mysql_query("select * from tb_barang");
				while ($data = mysql_fetch_array($tampil)){
					?>
				
			
				<tr align = "center">
					<td><?php echo $data['Kode']; ?> </td>
					<td><?php echo $data['Nama']; ?> </td>
					<td><?php echo $data['Harga']; ?> </td>
						<td class = "eh"><a href ="edit.php?id=<?php echo $data['Id']; ?>">
						Edit</a> | <a href ="hapus.php?Id=<?php echo $data['Id'];?>">Hapus</a></td>
						</tr>
					<?php
				}
					
				?>		
				<table align="center">
				<tr>
				<td><p align="right"><a href="logout.php"><button class ="btn">LOG OUT</button>
				</tr>
				</td>
				</table>
		</body>
		
		</html>
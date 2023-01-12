<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Mahasiswa | Web Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
</head>
<body>
	<div class="judul">		
		<h2>Database Mahasiswa</h2>
		<h3>Unika Soegijapranata Semarang</h3>
	</div>

	<br />
	<a href="index.php">
		<button>< Lihat Semua Data</button>
	</a>

	<h3>Masukan Data</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="jenis" required></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="merk" required></td>					
			</tr>	
			<tr>
				<td>Umur</td>
				<td><input type="text" name="warna" required></td>					
			</tr>	
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tahun" required></td>					
			</tr>
			<tr>
				<td>IPK</td>
				<td><input type="text" name="bbm" required></td>					
			</tr>	
				<td></td>
				<td><button type="submit">Simpan</button></td>					
			</tr>				
		</table>
	</form>
	
</body>
</html>

<!--
Code by YukCoding Tutor
www.yukcoding.id
-->
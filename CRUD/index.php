<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>TABEL REAKSI</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://yukcoding.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
</head>
<body>
	<div class="judul">		
		<h2>TABEL REAKSI</h2>
		
	</div>

	<br />
	<a href="index.php">
		<button>< Lihat Semua Data</button>
	</a>

	<h3>Masukan Data</h3>
	<form action="proses_tambah.php" method="post">		
		<table>
			<tr>
				<td>ID Reaksi</td>
				<td><input type="text" name="id" required></td>					
			</tr>

			<tr>
				<td>ID Akun</td>
				<td><input type="text" name="akun" required></td>					
			</tr>
			
			<tr>
			<td>Debit/Kredit</td>
				<td><input type="text" name="dk" required></td>
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
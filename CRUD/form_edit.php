<?php
session_start();
if(!isset($_SESSION['iduser'])) {
	echo "<script>window.location='login.php';</script>";
}

include "+koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Mahasiswa | Web Mahasiswa</title>
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
	
	<h3>Edit Mahasiswa</h3>
	<form action="proses_edit.php" method="post">
		<?php
		$id = $_GET['id'];

		$query = $con->prepare("SELECT * FROM kendaraan WHERE id = :id"); // tampil menggunakan method prepare
		$query->bindValue(':id', $id); // menggunakan binValue
		$query->execute();
		$data = $query->fetch();
		?>		
		<table>
			<tr>
				<td>NIM</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="jenis" value="<?php echo $data['jenis'] ?>" required>
				</td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="merk" value="<?php echo $data['merk'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Umur</td>
				<td><input type="text" name="warna" value="<?php echo $data['warna'] ?>" required></td>					
			</tr>	
			<tr>
				<td>Tempat Lahir</td>
				<td><input type="text" name="tahun" value="<?php echo $data['tahun'] ?>" required></td>					
			</tr>
			<tr>
				<td>IPK</td>
				<td><input type="text" name="bbm" value="<?php echo $data['bbm'] ?>" required></td>					
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
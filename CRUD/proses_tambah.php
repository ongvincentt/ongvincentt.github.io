<?php 

include "+koneksi.php";

$id = $_POST['id'];
$akun = $_POST['akun'];
$dk = $_POST['dk'];


$query = $con->prepare("INSERT INTO detil_reaksi (id_reaksi, id_akun, debet_kredit) 
                        VALUES (:id, :akun, :dk)");

$query->bindparam(':id', $id); // menggunakan bindparam
$query->bindparam(':akun', $akun);
$query->bindparam(':dk', $dk);


if($query->execute()) {
    echo "<script>alert('Data berhasil ditambahkan'); window.location='index.php';</script>";
} else {
    echo "<script>alert('Data gagal ditambahkan');</script>";
}

/*
Code by YukCoding Tutor
www.yukcoding.id
*/
?>
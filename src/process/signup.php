<?php
// Load file koneksi.php
include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$password = $_POST['password'];
$no_telp = $_POST['no_telp'];

// Proses upload
// if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $sql = $pdo->prepare("INSERT INTO Akun_Peserta(nik, nama, password, no_telp) VALUES(:nik,:nama,:password,:no_telp)");
  $sql->bindParam(':nik', $nik);
  $sql->bindParam(':nama', $nama);
  $sql->bindParam(':password', $password);
  $sql->bindParam(':no_telp', $no_telp);
  $sql->execute(); // Eksekusi query insert
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    header("location: index.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
?>
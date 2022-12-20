<?php 
 
 include 'koneksi.php';
 
session_start();
 
if (isset($_SESSION['nik'])) {
    header("Location: berhasil_login.php");
}
 
$nik = $_POST['nik'];
$password = $_POST['password'];
$sql = $pdo->prepare("SELECT * FROM Akun_Peserta WHERE nik=:nik AND password=:password");
$sql->bindParam(':nik', $nik);
$sql->bindParam(':password', $password);
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $_SESSION['nik'] = $result['nik'];
    $_SESSION['id_akun'] = $result['id_akun'];
} else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
}
 
?>
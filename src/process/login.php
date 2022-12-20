<?php 
 
 include '../koneksi.php';
 
session_start();
 
if (isset($_SESSION['nik'])) {
    header("Location: ../../profile.php");
}
 
$nik = $_POST['nik'];
$password = $_POST['password'];
$sql = $pdo->prepare("SELECT * FROM Akun_Peserta WHERE nik=:nik AND password=:pass");
$sql->bindParam(':nik', $nik);
$sql->bindParam(':pass', $password);
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $_SESSION['nik'] = $result['nik'];
    $_SESSION['id_akun'] = $result['id_akun'];
    header("Location: ../../profile.php");
} else {
    echo "<script>
    // alert('NIK atau password Anda salah. Silahkan coba lagi!');
    window.location.href='../../login.php';
    </script>";
    // header("Location: ../../login.php");
}
 
?>
<?php 
 
 include '../koneksi.php';
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: ../../admin.php");
}
 
$username = $_POST['username'];
$password = $_POST['password'];
$sql = $pdo->prepare("SELECT * FROM Akun_Panitia WHERE username=:username AND password=:password");
$sql->bindParam(':username', $username);
$sql->bindParam(':password', $password);
$sql->execute();
$result = $sql->fetch(PDO::FETCH_ASSOC);
if ($result) {
    $_SESSION['username'] = $result['username'];
    $_SESSION['id_admin'] = $result['id_akun'];
    header("Location: ../../admin.php");
} else {
    echo "<script>alert('username atau password Anda salah. Silahkan coba lagi!')</script>";
}
 
?>
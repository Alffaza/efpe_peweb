<?php 
 
 include 'koneksi.php';
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: berhasil_login.php");
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
    $_SESSION['id_akun'] = $result['id_akun'];
} else {
    echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
}


// if ($result->num_rows > 0) {
//     $row = mysqli_fetch_assoc($result);
//     header("Location: berhasil_login.php");
// } else {
//     echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
// }
 
?>
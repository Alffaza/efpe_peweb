<?php 
 
include 'koneksi.php';


$id = $_GET['id'];

$lokasi_tes  = $_POST['lokasi'];


$sql = $pdo->prepare("UPDATE Peserta SET sudah_oke=true, lokasi_tes=:lokasi_tes WHERE nomor_peserta=:id");
$sql->bindParam(':lokasi_tes', $lokasi_tes);
$sql->bindParam(':id', $id);
$sql->execute();
if($sql){
    header("location: panit_page.php");
}else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
 
?>
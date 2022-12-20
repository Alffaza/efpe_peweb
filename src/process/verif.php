<?php 
 
include '../koneksi.php';


$id = $_GET['id'];
$tempat_tes = array("Surabaya","Jakarta","Bandung", "Jogja");
$lokasi_tes  = $tempat_tes[array_rand($tempat_tes,1)];


$sql = $pdo->prepare("UPDATE Peserta SET sudah_oke=true, lokasi_tes=:lokasi_tes WHERE nomor_peserta=:id");
$sql->bindParam(':lokasi_tes', $lokasi_tes);
$sql->bindParam(':id', $id);
$sql->execute();
if($sql){
    header("location: ../../admin.php");
}else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
 
?>
<?php 
 
 include '../koneksi.php';
 
session_start();
 
if (!isset($_SESSION['nik'])) {
    header("Location: login_page.php");
}

$id_akun = $_SESSION['id_akun'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$kualifikasi_pendidikan = $_POST['kualifikasi_pendidikan'];
$formasi_jabatan = $_POST['formasi_jabatan'];

$pas_foto = $_FILES['pas_foto']['name'];
$pas_foto_tmp = $_FILES['pas_foto']['tmp_name'];
$foto_berkas = $_FILES['foto_berkas']['name'];
$foto_berkas_tmp = $_FILES['foto_berkas']['tmp_name'];

$fotobaru = date('dmYHis').$pas_foto;
$path_pas = "../../images/pas/".$fotobaru;
$fotobaru = date('dmYHis').$foto_berkas;
$path_berkas = "../../images/berkas/".$fotobaru;


if(move_uploaded_file($pas_foto_tmp, $path_pas) && move_uploaded_file($foto_berkas_tmp, $path_berkas))
{ // Cek apakah gambar berhasil diupload atau tidak
    $sql = $pdo->prepare("UPDATE Peserta SET id_akun=:id_akun , jenis_kelamin=:jenis_kelamin, tempat_lahir=:tempat_lahir, tanggal_lahir=:tanggal_lahir, kualifikasi_pendidikan=:kualifikasi_pendidikan, formasi_jabatan=:formasi_jabatan, pas_foto=:pas_foto, foto_berkas=:foto_berkas, sudah_oke=false");
    $sql->bindParam(':id_akun', $id_akun);
    $sql->bindParam(':jenis_kelamin', $jenis_kelamin);
    $sql->bindParam(':tempat_lahir', $tempat_lahir);
    $sql->bindParam(':tanggal_lahir', $tanggal_lahir);
    $sql->bindParam(':kualifikasi_pendidikan', $kualifikasi_pendidikan);
    $sql->bindParam(':formasi_jabatan', $formasi_jabatan);
    $sql->bindParam(':pas_foto', $pas_foto);
    $sql->bindParam(':foto_berkas', $foto_berkas);
    $sql->execute();
    if($sql){
        header("location: ../../profile.php");
    }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
        echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
    }
}else{
    // Jika gambar gagal diupload, Lakukan :
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
 
?>
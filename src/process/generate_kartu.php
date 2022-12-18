<?php
    session_start();


    include "../koneksi.php";

    $id = $_SESSION['id_akun'];
    $sql = $pdo->prepare("SELECT * FROM Peserta WHERE id_akun=:id AND sudah_oke=true");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $res= $sql->fetch();
    if(!$res)
        header('location: ../../profile.php');


    $Lapor = "SELECT nama, nomor_peserta, jenis_kelamin, kualifikasi_pendidikan, formasi_jabatan, lokasi_tes, nik, no_telp FROM Peserta JOIN Akun_Peserta ON Peserta.id_akun = Akun_Peserta.id_akun";
    $Hasil = $pdo->query($Lapor);
    $Data = array();
    foreach ($Hasil as $row) {
        array_push($Data, $row);
    }

    $labels= array(
        'Nama',
        'Nomor Peserta',
        'Jenis Kelamin',
        'Kualifikasi Pendidikan',
        'Formasi Jabatan',
        'Lokasi Tes',
        'NIK',
        'Nomor Telp',
    );
    $Judul = "Kartu Peserta";
    $tgl= "Time : ".date("l, d F Y");
    require ("../../fpdf185/fpdf.php");
    $pdf = new FPDF();
    $pdf->AddPage('P','A4');
    $pdf->SetFont('arial','B','15');
    $pdf->Cell(0, 15, $Judul, '0', 1, 'C');
    $pdf->SetFont('arial','i','9');
    $pdf->Cell(0, 10, $tgl, '0', 1, 'P');
    $pdf->SetFont('arial','','12');
    $pdf->SetFillColor(255,255,255);
    $pdf->SetTextColor(0);
    $pdf->setDrawColor(255,255,255);
    $ind=0;
    foreach ($labels as $label){
        $pdf->Cell(60, 8, $label, 1, '0', 'L', true);
        $pdf->Cell(30, 8, ': '.$Data[0][$ind], 1, '0', 'L', true);
        $ind = $ind+1;
        $pdf->Ln();
    }
    $pdf->Output();
?>
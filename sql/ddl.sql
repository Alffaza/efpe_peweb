CREATE DATABASE fp_pweb;
USE fp_pweb

CREATE TABLE Akun_Peserta(
  id_akun int(10) NOT NULL AUTO_INCREMENT,
  nama varchar(32) NOT NULL,
  password varchar(32) NOT NULL,
  nik varchar(16) NOT NULL,
  no_telp varchar(16) NOT NULL,
  PRIMARY KEY(id_akun)
);

CREATE TABLE Peserta(
  nomor_peserta int(16) NOT NULL AUTO_INCREMENT,
  id_akun int(10) NOT NULL,
  jenis_kelamin boolean NOT NULL,
  tempat_lahir varchar(64),
  tanggal_lahir date,
  kualifikasi_pendidikan varchar(64) NOT NULL,
  formasi_jabatan varchar(64) NOT NULL,
  lokasi_tes varchar(64),
  pas_foto varchar(200) NOT NULL,
  foto_berkas varchar(200) NOT NULL,
  sudah_oke boolean,
  FOREIGN KEY (id_akun) REFERENCES Akun_Peserta(id_akun)
);

CREATE TABLE Akun_Panitia(
  id_akun int(10) NOT NULL AUTO_INCREMENT,
  username varchar(32) NOT NULL,
  password varchar(32) NOT NULL,
  PRIMARY KEY(id_akun)
)
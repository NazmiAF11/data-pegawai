<?php
include 'koneksi.php';

if($_SERVER['REQUEST_METHOD']=='POST'){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $posisi = $_POST['posisi'];
    $gaji = $_POST['gaji'];

    $query = "INSERT INTO pegawai(nama,email,posisi,gaji)
            VALUES('$nama,$email,$posisi,$gaji')";
    
    if(mysql_query($koneksi,$query)) {
        echo"Data Berhasil Disimpan";
        echo "<a href='index.php'>Kembali Kehalaman Utama</a>"
    } else {
        echo "Gagal Menyimpan Data:".mysql_eror($koneksi);
    }
}
?>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "data_pegawai";

$koneksi = mysql_connect($host,$user,$password,$database);

if (!$koneksi){
    die("koneksi gagal:".mysql_connect_eror());
}
?>
<?php
$host = 'localhost';
$userdb = 'root';
$passdb = '';
$namadb = 'pesat10_ppdb';
$db = mysqli_connect($host, $userdb, $passdb, $namadb);

if(!$db) {
    die("Gagal terhubung ke database: " . mysqli_connect_error());
}
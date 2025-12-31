<?php
$koneksi = mysqli_connect("localhost","root","","address_book");

if (!$koneksi) {
    die("Koneksi Database Gagal... " . mysqli_connect_error());
}
?>


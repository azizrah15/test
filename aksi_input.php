<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$wa = $_POST['wa'];
$alamat = $_POST['alamat'];

$dt = new Database();

$dt->simpanData($nama, $email, $wa, $alamat);

header("location:index.php");

?>
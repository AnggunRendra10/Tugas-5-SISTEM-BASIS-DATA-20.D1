<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "klinnik_312010022";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} else echo "Koneksi berhasil";
?>
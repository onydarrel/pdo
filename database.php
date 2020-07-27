<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "pdo1";

// cek koneksi ke database
try {
  $konek = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
  $konek->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Berhasil konek";
} catch (PDOException $th) {
  die("Gagal koneksi");
}

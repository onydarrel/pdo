<?php include "database.php";

$query = "INSERT INTO orang VALUES ('NULL','$_POST[nama]','$_POST[alamat]')";
$data = $konek->prepare($query);

// jalankan perintah query SQL
$data->execute();

//redirect ke index.php
header("location:index.php");

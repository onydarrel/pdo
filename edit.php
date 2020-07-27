<?php include "database.php";

$query = "UPDATE orang SET nama='$_POST[nama]', alamat='$_POST[alamat]' WHERE id=$_POST[id]";
$data = $konek->prepare($query);
$data->execute();

// redirect ke index.php
header("location:index.php");

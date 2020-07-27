<?php include "database.php";

$query = "DELETE FROM orang WHERE id=$_GET[id]";
$data = $konek->prepare($query);
$data->execute();

// kembali ke index.php
header("location:index.php");

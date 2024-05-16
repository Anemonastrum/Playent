<?php
$server = "anemona.cloud";
$user = "root";
$password = "passwd";
$db = "anemonastrumdb";

$connect = mysqli_connect($server, $user, $password, $db);
if (!$connect){
    die("Ada masalah koneksi ke database: " . mysqli_connect_error());
}
?>
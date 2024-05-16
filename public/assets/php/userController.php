<?php
include('assets/php/dbconfig.php');

// Fetch data from the database
$sql = "SELECT * FROM userdb";
$result = mysqli_query($connect, $sql);


?>

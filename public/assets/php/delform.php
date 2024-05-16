<?php
include('dbconfig.php');

if (isset($_GET['kode_matkul'])) {
    $kode_matkul = $_GET['kode_matkul'];

    // Construct SQL queries to delete data from 'matkuldb' and 'materidb' tables
    $sql1 = "DELETE FROM matkuldb WHERE kode_matkul = '$kode_matkul'";
    $sql2 = "DELETE FROM materidb WHERE kode_matkul = '$kode_matkul'";

    // Execute the SQL queries
    $result1 = mysqli_query($connect, $sql1);
    $result2 = mysqli_query($connect, $sql2);

    if ($result1 && $result2) {
        // Data deleted successfully
        header('location: ../../list.php?status=deleted'); // Redirect to the view page
    } else {
        echo "Delete operation failed: " . mysqli_error($connect);
    }
} else {
    die("Access Denied");
}
?>

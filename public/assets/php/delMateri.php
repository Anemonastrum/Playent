<?php
include('dbconfig.php');

if (isset($_GET['kode_matkul']) && isset($_GET['materi'])) {
    $kode_matkul = $_GET['kode_matkul'];
    $materi = $_GET['materi'];

    // Construct the SQL query to delete data from the 'materidb' table based on 'matkul' and 'materi'
    $sql = "UPDATE materidb SET materi" . $materi . " = '', jdmateri" . $materi . " = '' WHERE kode_matkul = '$kode_matkul'";
    $result = mysqli_query($connect, $sql);

    if (!$result) {
        die("Deletion failed: " . mysqli_error($connect));
    }

    // Redirect back to the page where you view the records
    header("Location: ../../view.php?kode_matkul=" . $kode_matkul . ""); // Replace with the actual view page URL
    exit();
} else {
    echo "Missing parameters for deletion.";
    // Handle this case as needed
}
?>

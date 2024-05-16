<?php
include('dbconfig.php');

if (isset($_POST['daftar'])) {
    $nik = $_POST['nik'];
    $nm = $_POST['nm'];
    $almt = $_POST['almt'];
    $jkl = $_POST['jkl'];
    $skl = $_POST['skl'];

    if (empty($nik) || empty($nm) || empty($almt) || empty($jkl) || empty($skl)) {
        header('location: ../../create.php?status=kosong');
        exit;
    }

    // Check if a record with the same 'nik' already exists
    $checkSql = "SELECT COUNT(*) FROM datadb WHERE nik = '$nik'";
    $checkResult = mysqli_query($connect, $checkSql);
    $count = mysqli_fetch_array($checkResult);

    if ($count[0] == 0) {
        // 'nik' does not exist, insert the record
        $sql = "INSERT INTO datadb (nik, nm, almt, jkl, skl) VALUES ('$nik', '$nm', '$almt', '$jkl', '$skl')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('location: ../../create.php?status=sukses');
        } else {
            header('location: ../../create.php?status=gagal');
        }
    } else {
        header('location: ../../create.php?status=nikused');
    }
} else {
    die("Access Denied");
}
?>

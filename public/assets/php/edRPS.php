<?php
include('dbconfig.php');

if (isset($_POST['update'])) {
    $matkul = mysqli_real_escape_string($connect, $_POST['matkul']);
    $kode_matkul = mysqli_real_escape_string($connect, $_POST['kode_matkul']);
    $new_kode_matkul = mysqli_real_escape_string($connect, $_POST['new_kode_matkul']);
    $deskripsi = mysqli_real_escape_string($connect, $_POST['deskripsi']);

    $materi1 = mysqli_real_escape_string($connect, $_POST['materi1']);
    $materi2 = mysqli_real_escape_string($connect, $_POST['materi2']);
    $materi3 = mysqli_real_escape_string($connect, $_POST['materi3']);
    $materi4 = mysqli_real_escape_string($connect, $_POST['materi4']);
    $materi5 = mysqli_real_escape_string($connect, $_POST['materi5']);
    $materi6 = mysqli_real_escape_string($connect, $_POST['materi6']);
    $materi7 = mysqli_real_escape_string($connect, $_POST['materi7']);
    $materi8 = mysqli_real_escape_string($connect, $_POST['materi8']);
    $materi9 = mysqli_real_escape_string($connect, $_POST['materi9']);
    $materi10 = mysqli_real_escape_string($connect, $_POST['materi10']);
    $materi11 = mysqli_real_escape_string($connect, $_POST['materi11']);
    $materi12 = mysqli_real_escape_string($connect, $_POST['materi12']);
    $materi13 = mysqli_real_escape_string($connect, $_POST['materi13']);
    $materi14 = mysqli_real_escape_string($connect, $_POST['materi14']);

    $jdmateri1 = mysqli_real_escape_string($connect, $_POST['jdmateri1']);
    $jdmateri2 = mysqli_real_escape_string($connect, $_POST['jdmateri2']);
    $jdmateri3 = mysqli_real_escape_string($connect, $_POST['jdmateri3']);
    $jdmateri4 = mysqli_real_escape_string($connect, $_POST['jdmateri4']);
    $jdmateri5 = mysqli_real_escape_string($connect, $_POST['jdmateri5']);
    $jdmateri6 = mysqli_real_escape_string($connect, $_POST['jdmateri6']);
    $jdmateri7 = mysqli_real_escape_string($connect, $_POST['jdmateri7']);
    $jdmateri8 = mysqli_real_escape_string($connect, $_POST['jdmateri8']);
    $jdmateri9 = mysqli_real_escape_string($connect, $_POST['jdmateri9']);
    $jdmateri10 = mysqli_real_escape_string($connect, $_POST['jdmateri10']);
    $jdmateri11 = mysqli_real_escape_string($connect, $_POST['jdmateri11']);
    $jdmateri12 = mysqli_real_escape_string($connect, $_POST['jdmateri12']);
    $jdmateri13 = mysqli_real_escape_string($connect, $_POST['jdmateri13']);
    $jdmateri14 = mysqli_real_escape_string($connect, $_POST['jdmateri14']);


    // Update the record using the 'matkul' as the identifier
    $sql = "UPDATE matkuldb SET kode_matkul='$new_kode_matkul', deskripsi='$deskripsi', matkul='$matkul' WHERE kode_matkul='$kode_matkul'";
    $query = mysqli_query($connect, $sql);

    $sql2 = "UPDATE materidb SET kode_matkul='$new_kode_matkul', jdmateri1='$jdmateri1', jdmateri2='$jdmateri2', jdmateri3='$jdmateri3', jdmateri4='$jdmateri4', jdmateri5='$jdmateri5', jdmateri6='$jdmateri6', jdmateri7='$jdmateri7', jdmateri8='$jdmateri8', jdmateri9='$jdmateri9', jdmateri10='$jdmateri10', jdmateri11='$jdmateri11', jdmateri12='$jdmateri12', jdmateri13='$jdmateri13', jdmateri14='$jdmateri14', materi1='$materi1', materi2='$materi2', materi3='$materi3', materi4='$materi4', materi5='$materi5', materi6='$materi6', materi7='$materi7', materi8='$materi8', materi9='$materi9', materi10='$materi10', materi11='$materi11', materi12='$materi12', materi13='$materi13', materi14='$materi14' WHERE kode_matkul='$kode_matkul'";
    $query2 = mysqli_query($connect, $sql2);

    if ($query && $query2) {
        header('location: ../../list.php?status=updated'); // Redirect to the view page after updating
    } else {
        echo "Update failed: " . mysqli_error($connect);
    }
} else {
    die("Access Denied");
}
?>

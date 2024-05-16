<?php
include('dbconfig.php');

if (isset($_POST['update'])) {
    $nik = mysqli_real_escape_string($connect, $_POST['nik']);
    $new_nik = mysqli_real_escape_string($connect, $_POST['new_nik']);
    $nm = mysqli_real_escape_string($connect, $_POST['nm']);
    $almt = mysqli_real_escape_string($connect, $_POST['almt']);
    $jkl = mysqli_real_escape_string($connect, $_POST['jkl']);
    $skl = mysqli_real_escape_string($connect, $_POST['skl']);

    // Update the record using the 'nik' as the identifier
    $sql = "UPDATE datadb SET nik='$new_nik', nm='$nm', almt='$almt', jkl='$jkl', skl='$skl' WHERE nik='$nik'";
    $query = mysqli_query($connect, $sql);

    if ($query) {
        header('location: ../../list.php?status=updated'); // Redirect to the view page after updating
    } else {
        echo "Update failed: " . mysqli_error($connect);
    }
} else {
    die("Access Denied");
}
?>

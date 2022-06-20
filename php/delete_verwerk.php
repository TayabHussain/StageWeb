<?php
require 'config.php';

$StudentID = $_GET['StudentID'];

if (is_numeric($StudentID)) {
    $result = mysqli_query($link, "DELETE FROM Stage_Student WHERE StudentID = '$StudentID'");

    if ($result) {
        header("Location: ../success_delete.php");
        exit();
    } else {
        header("Location: ../no_stage.php");
        exit();
}
} else {
    header("Location: ../no_record.php");
    exit();
}
?>
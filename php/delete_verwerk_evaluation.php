<?php
require 'config.php';

$StudentID = $_GET['StudentID'];

if (is_numeric($StudentID)) {
    $result = mysqli_query($link, "DELETE FROM `Evaluatie_Stage` WHERE `studentID`= '$StudentID'");

    if ($result) {
        header("Location: ../success_delete.php");
        exit();
    } else {
        header("Location: ../no_record.php");
        exit();
    }
} else {
    header("Location: ../no_stage.php");
    exit();
}
?>
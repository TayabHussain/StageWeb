<?php
require 'config.php';

$StudentID = $_GET['StudentID'];

if (is_numeric($StudentID)) {
    $result = mysqli_query($link, "DELETE FROM Stage_Student WHERE StudentID = '$StudentID'");

    if ($result) {
        header("Location: ../worked_evaluation.php");
        exit();
    } else {
        header("Location: ../error_evaluation.php");
        exit();
}
} else {
    header("Location: ../error_evaluation.php");
    exit();
}
?>
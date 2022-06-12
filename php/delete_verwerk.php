<?php
require 'config.php';

$StudentID = $_GET['StudentID'];

if (is_numeric($StudentID)) {
    $result = mysqli_query($link, "DELETE FROM Stage_Student WHERE StudentID = '$StudentID'");

    if ($result) {
        echo "Deleted";
        exit();
    } else {
        echo "Something went wrong.";
        exit();
}
} else {
    echo "No ID found";
    exit();
}
?>
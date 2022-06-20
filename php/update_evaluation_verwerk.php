<?php
require 'config.php';
session_start();
$studentID = $_POST['StudentID'];
$cijferBegeleiding = $_POST['cijferBegeleiding'];
$cijferTechniek = $_POST['cijferTechniek'];
$cijferAlgemeen = $_POST['cijferAlgemeen'];
$opmerking = $_POST['opmerking'];


if (is_numeric($studentID)) {



    $sql = "UPDATE `Evaluatie_Stage` SET `cijferBegeleiding`='$cijferBegeleiding',`cijferTechniek`='$cijferTechniek',`cijferAlgemeen`='$cijferAlgemeen',`opmerking`='$opmerking' WHERE studentID = '$studentID'";

    $query = mysqli_query($link, $sql);

    header("location: ../worked_evaluation.php");
} else {
    header("Location: ../error_evaluation.php");
}

?>
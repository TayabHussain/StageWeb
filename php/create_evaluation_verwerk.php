<?php
require 'config.php';
session_start();

$cijferBegeleiding = $_POST['cijferBegeleiding'];
$cijferTechniek = $_POST['cijferTechniek'];
$cijferAlgemeen = $_POST['cijferAlgemeen'];
$opmerking = $_POST['opmerking'];
$studentID = $_POST['studentID'];
$ID = $_POST['ID'];

if (strlen($cijferBegeleiding) > 0 &&
    strlen($cijferTechniek) > 0 &&
    strlen($cijferAlgemeen) > 0 &&
    strlen($opmerking) > 0 &&
    strlen($studentID) > 0 &&
    strlen($ID) > 0) {

    $sql = "INSERT INTO `Evaluatie_Stage`(`ID`, `studentID`, `stageID`, `cijferBegeleiding`, `cijferTechniek`, `cijferAlgemeen`, `opmerking`) VALUES (NULL ,'$studentID','$ID','$cijferBegeleiding','$cijferTechniek','$cijferAlgemeen','$opmerking')";

    $query = mysqli_query($link, $sql);

    header("location: ../worked_evaluation.php");
} else {
    header("Location: ../error_evaluation.php");
}

?>
<?php
require 'config.php';
session_start();

$cijferBegeleiding = $_POST['cijferBegeleiding'];
$cijferTechniek = $_POST['cijferTechniek'];
$cijferAlgemeen = $_POST['cijferAlgemeen'];
$opmerking = $_POST['opmerking'];
$studentID = $_POST['studentNo'];

if (strlen($cijferBegeleiding) > 0 &&
    strlen($cijferTechniek) > 0 &&
    strlen($cijferAlgemeen) > 0 &&
    strlen($opmerking) > 0 &&
    strlen($studentID) > 0) {

    $sql = "INSERT INTO `Evaluatie_Stage`(`ID`, `studentID`, `cijferBegeleiding`, `cijferTechniek`, `cijferAlgemeen`, `opmerking`) VALUES (NULL ,'$studentID','$cijferBegeleiding','$cijferTechniek','$cijferAlgemeen','$opmerking')";

    $query = mysqli_query($link, $sql);

    header("location: ../worked_create.php");
} else {
    header("Location: ../error_create.php");
}

?>
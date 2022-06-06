<?php
require 'config.php';
session_start();

$naamBedrijf = $_POST['naamBedrijf'];
$plaatsBedrijf = $_POST['plaatsBedrijf'];
$studentID = $_POST['studentID'];
$linkBedrijf = $_POST['linkBedrijf'];
$contactVoornaamBedrijf = $_POST['contactVoornaamBedrijf'];
$contactAchternaamBedrijf = $_POST['contactAchternaamBedrijf'];
$datumBedrijf = $_POST['datumBedrijf'];
$contract = $_POST['contract'];

if (strlen($naamBedrijf) > 0 &&
    strlen($plaatsBedrijf) > 0 &&
    strlen($linkBedrijf) > 0 &&
    strlen($contactVoornaamBedrijf) > 0 &&
    strlen($contactAchternaamBedrijf) > 0 &&
    strlen($datumBedrijf) > 0 &&
    strlen($contract) > 0) {

    $sql = "INSERT INTO `Stage_Student`(`ID`, `studentID`, `naamBedrijf`, `plaatsBedrijf`, `linkBedrijf`, `contactVoornaamBedrijf`, `contactAchternaamBedrijf`, `datumBedrijf`, `contract`) VALUES (NULL ,'$studentID','$naamBedrijf','$plaatsBedrijf','$linkBedrijf','$contactVoornaamBedrijf','$contactAchternaamBedrijf','$datumBedrijf','$contract')";

    $query = mysqli_query($link, $sql);

    header("location: ../worked_create.php");
} else {
    header("Location: ../error_create.php");
}

?>
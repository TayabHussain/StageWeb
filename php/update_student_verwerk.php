<?php
require 'config.php';
session_start();
$studentID = $_POST['StudentID'];
$naamBedrijf = $_POST['naamBedrijf'];
$plaatsBedrijf = $_POST['plaatsBedrijf'];
$linkBedrijf = $_POST['linkBedrijf'];
$contactVoornaamBedrijf = $_POST['contactVoornaamBedrijf'];
$contactAchternaamBedrijf = $_POST['contactAchternaamBedrijf'];
$datumBedrijf = $_POST['datumBedrijf'];
$contract = $_POST['contract'];

if (is_numeric($studentID) &&
    strlen($studentID)  > 0 &&
    strlen($naamBedrijf)  > 0 &&
    strlen($plaatsBedrijf)  > 0 &&
    strlen($linkBedrijf)  > 0 &&
    strlen($contactVoornaamBedrijf)  > 0 &&
    strlen($contactAchternaamBedrijf)  > 0 &&
    strlen($datumBedrijf)  > 0 &&
    strlen($contract)  > 0 ){


    $sql = "UPDATE `Stage_Student` SET `naamBedrijf`='$naamBedrijf',`plaatsBedrijf`='$plaatsBedrijf',`linkBedrijf`='$linkBedrijf',`contactVoornaamBedrijf`='$contactVoornaamBedrijf',`contactAchternaamBedrijf`='$contactAchternaamBedrijf',`datumBedrijf`='$datumBedrijf',`contract`='$datumBedrijf' WHERE StudentID = '$studentID'";

    $query = mysqli_query($link, $sql);

    header("location: ../worked_create.php");
} else {
    header("Location: ../error_create.php");
}

?>
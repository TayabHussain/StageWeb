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

if (is_numeric($studentID)) {



    $sql = "UPDATE `Stage_Student` SET ID = NULL ,`naamBedrijf`='$naamBedrijf',`plaatsBedrijf`='$plaatsBedrijf',`linkBedrijf`='$linkBedrijf',`contactVoornaamBedrijf`='$contactVoornaamBedrijf',`contactAchternaamBedrijf`='$contactAchternaamBedrijf',`datumBedrijf`='$datumBedrijf',`contract`='$contract' WHERE StudentID = '$studentID'";

    $query = mysqli_query($link, $sql);

    header("location: ../success_update.php");
} else {
    header("Location: ../error_update.php");
}

?>
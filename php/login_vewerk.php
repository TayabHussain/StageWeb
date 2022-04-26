<?php
require 'config.php';
session_start();
$studentnummer = $_POST['studentnummer'];
$wachtwoord = $_POST['password'];

if (strlen($studentnummer) && strlen($wachtwoord) > 0) {

    $wachtwoord = sha1($wachtwoord);

    $sql = "SELECT * FROM stage_student WHERE studentnummer = '$studentnummer' AND wachtwoord = '$wachtwoord'  ";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {


        $_SESSION['studentnummer'] = $studentnummer;

        header("Location: ../dashboard.php");
    }
    else {
        echo "something went bad";
        exit();
    }
}
?>
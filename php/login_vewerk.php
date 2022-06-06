<?php
require 'config.php';
session_start();
$studentNo = $_POST['studentNo'];
$wachtwoord = $_POST['wachtwoord'];

if (strlen($studentNo) && strlen($wachtwoord) > 0) {

    $wachtwoord = sha1($wachtwoord);

    $sql = "SELECT * FROM Users_Student WHERE studentNo = '$studentNo' AND wachtwoord = '$wachtwoord'  ";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {


        $_SESSION['studentNo'] = $studentNo;

        header("Location: ../dashboard.php");
    }
    else {
        header("Location: ../error_login.php");
    }
}
?>
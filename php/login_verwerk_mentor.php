<?php
require 'config.php';
session_start();
$mentorNo = $_POST['mentorNo'];
$wachtwoord = $_POST['wachtwoord'];

if (strlen($mentorNo) && strlen($wachtwoord) > 0) {

    $wachtwoord = sha1($wachtwoord);

    $sql = "SELECT * FROM Users_Mentor WHERE mentorNo = '$mentorNo' AND wachtwoord = '$wachtwoord'  ";

    $result = mysqli_query($link, $sql);
    
    if (mysqli_num_rows($result) == 1) {

        $_SESSION['mentorNo'] = $mentorNo;


        header("Location: ../dashboard_mentor.php");
    }
    else {
        header("Location: ../error_login.php");
    }
}
?>
<?php
require 'config.php';
session_start();
$MentorNo = $_POST['MentorNo'];
$wachtwoord = $_POST['wachtwoord'];

if (strlen($MentorNo) && strlen($wachtwoord) > 0) {

    $wachtwoord = sha1($wachtwoord);

    $sql = "SELECT * FROM Users_Mentor WHERE mentorNo = '$MentorNo' AND wachtwoord = '$wachtwoord'  ";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {


        $_SESSION['mentorNo'] = $MentorNo;

        header("Location: ../dashboard_mentor.php");
    }
    else {
        echo "Wrong password/username!";
        exit();
    }
}
?>
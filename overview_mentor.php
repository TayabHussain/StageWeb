<?php
session_start();

require "php/config.php";

if (!isset($_SESSION['mentorNo']) || strlen($_SESSION['mentorNo']) == 0) {
    header("Location: index.php");
    exit;
}


// session php here**
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="GLR.WEB is voor de studenten van Grafisch Lyceum Rotterdam om hun stage te registreren">
    <meta name="keywords" content="GLR, GLR.WEB, Stage, Stagewebsite, Grafisch Lyceum Rotterdam">
    <title>GLR.WEB - Class Overview</title>
<!--    <link rel="stylesheet" href="css/dashboard.css" type="text/css">-->
    <link rel="stylesheet" href="css/table.css" type="text/css">

</head>
<body>
<div class="container">
    <nav>
        <input type="checkbox" id="nav" class="hidden">
        <label for="nav" class="nav-btn">
            <i></i>
            <i></i>
            <i></i>
        </label>
        <div class="logo">
            <a href="index.php">GLR.Web</a>
        </div>
        <div class="nav-wrapper">
            <ul>

                <!--HEADER PHP KOMT HIER NOG-->
                <li><a href="index.php">Home</a></li>
                <?php

                $StudentLoggedin = isset($_SESSION['studentNo']) || strlen($_SESSION['studentNo']) != 0;
                $MentorLoggedin = isset($_SESSION['mentorNo']) || strlen($_SESSION['mentorNo']) != 0;

                if (!$StudentLoggedin && !$MentorLoggedin) {
                    echo '<li><a href="login.php">Login</a></li>';
                } else {
                    if ($MentorLoggedin) {
                        echo '<li><a href="dashboard_mentor.php">Dashboard</a></li>';
                    }
                    else {
                        echo '<li><a href="dashboard.php">Dashboard</a></li>';
                    }
                    echo '<li><a href="logout.php">Logout</a></li>';
                }
                ?>


                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>
    <div class="table">
        <h1>Class Overview</h1>

        <!--Table-->
        <?php
        $studentID = $_SESSION['studentNo'];

        $result = "SELECT * FROM Stage_Student";

        $result = mysqli_query($link, $result);

        echo "<table>";

        echo "<tr>";
        echo "<th>StudentID</th>";
        echo "<th>Check Details</th>";


        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

            echo "<td>" . $row['studentID'] . "</td>";
            echo "<td><a href='detail.php?studentID=" . $row['studentID'] . "'>Details</a></td>";

        }



        echo "</table>"
        ?>
    </div>
</body>
</html>

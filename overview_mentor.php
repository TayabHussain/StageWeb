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
                if (!isset($_SESSION['studentNo']) || strlen($_SESSION['studentNo']) == 0) {
                    echo '<li><a href="login.php">Login</a></li>';
                } else {
                    echo '<li><a href="dashboard.php">Dashboard</a></li>';
                    echo '<li><a href="logout.php">Logout</a></li>';
                }
                ?>
                <?php
                if (!isset($_SESSION['mentorNo']) || strlen($_SESSION['mentorNo']) == 0) {

                } else {
                    echo '<li><a href="dashboard_mentor.php">Dashboard</a></li>';
                    echo '<li><a href="logout.php">Logout</a></li>';
                }
                ?>


                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>
    <div class="table">
        <h1>Class Overview</h1><br><br>
        <!--Table-->
        <?php

        $result = "SELECT * FROM Stage_Student RIGHT JOIN Users_Student ON Users_Student.studentNo = Stage_Student.studentID;";

        $result = mysqli_query($link, $result);

        echo "<table>";

        echo "<tr>";

        echo "<th>Name of Company</th>";
        echo "<th>Place</th>";
        echo "<th>URL</th>";
        echo "<th>Contact Person</th>";
        echo "<th>Date of Start</th>";
        echo "<th>Contract</th>";

        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

            echo "<td>" . $row['naamBedrijf'] . "</td>";
            echo "<td>" . $row['plaatsBedrijf'] . "</td>";
            echo "<td>" . $row['linkBedrijf'] . "</td>";
            echo "<td>" . $row['contactVoornaamBedrijf'] . " " . $row['contactAchternaamBedrijf'] . "</td>";
            echo "<td>" . $row['datumBedrijf'] . "</td>";
            echo "<td>" . $row['contract'] . "</td>";

        }



        echo "</table>"
        ?>
    </div>
</body>
</html>

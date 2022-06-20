<?php
session_start();

require "php/config.php";
$studentID = $_GET['studentID'];

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
    <title>GLR.WEB - Detail</title>
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
    <h1>Details From <?php echo $studentID ?></h1>

    <!--Table-->
    <?php

    $result = "SELECT * FROM Stage_Student WHERE studentID = '$studentID'";
    $result2 = "SELECT * FROM Users_Student WHERE studentNo = '$studentID'";

    $result3 = "SELECT A.* FROM Evaluatie_Stage A LEFT JOIN Stage_Student B ON A.stageID = B.ID";

    $result = mysqli_query($link, $result);
    $result2 = mysqli_query($link, $result2);
    $result3 = mysqli_query($link, $result3);

    echo "<h2>Internship Info</h2>";
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
    echo "</table>";

    echo "<h2>Student Info</h2>";
    echo "<table>";

    echo "<tr>";

    echo "<th>First Name</th>";
    echo "<th>Last Name</th>";
    echo "<th>Email</th>";
    echo "<th>Class</th>";

    echo "</tr>";

    while ($row2 = mysqli_fetch_array($result2)) {
        echo "<tr>";

        echo "<td>" . $row2['voornaam'] . "</td>";
        echo "<td>" . $row2['achternaam'] . "</td>";
        echo "<td>" . $row2['email'] . "</td>";
        echo "<td>" . $row2['klas'] . "</td>";
    }

    echo "</table>";


    echo "<h2>Evaluation Internship</h2>";
    echo "<table>";
    echo "<tr>";

    echo "<th>Grade Of Guidance</th>";
    echo "<th>Grade Of Engineering</th>";
    echo "<th>General Grade</th>";
    echo "<th>Notes</th>";


    while ($row3 = mysqli_fetch_array($result3)) {
        echo "<tr>";

        echo "<td>" . $row3['cijferBegeleiding'] . "</td>";
        echo "<td>" . $row3['cijferTechniek'] . "</td>";
        echo "<td>" . $row3['cijferAlgemeen'] . "</td>";
        echo "<td>" . $row3['opmerking'] . "</td>";
    }



    echo "</tr>";
    echo "</table>";
    ?>
</div>
</body>
</html>

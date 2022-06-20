<?php
session_start();

require "php/config.php";

if (!isset($_SESSION['studentNo']) || strlen($_SESSION['studentNo']) == 0) {
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
    <title>GLR.WEB - Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css" type="text/css">

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
<div class="dashboard">
    <h1>Evaluation Dashboard</h1><br>
    <p>Your current evaluation:</p>
    <?php
    $studentID = $_SESSION['studentNo'];
    $result = "SELECT * FROM Evaluatie_Stage WHERE studentID = '$studentID'";

    $result = mysqli_query($link, $result);

    if (mysqli_num_rows($result) == 1) {

        echo "<table>";

        echo "<tr>";

        echo "<th>Grade Of Guidance</th>";
        echo "<th>Grade Of Engineering</th>";
        echo "<th>General Grade</th>";
        echo "<th>Notes</th>";

        echo "</tr>";

        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";

            echo "<td>" . $row['cijferBegeleiding'] . "</td>";
            echo "<td>" . $row['cijferTechniek'] . "</td>";
            echo "<td>" . $row['cijferAlgemeen'] . "</td>";
            echo "<td>" . $row['opmerking'] . "</td>";
        }

        echo "</tr>";
        echo "</table>";
    } else {
        echo "<p>You don't have an evaluation yet.</p>";
    }
    ?>

    <button class="button button6" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/add_evaluation.php?studentID=<?php echo $studentID?>'">Add Evaluation</button>
    <button class="button button6" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/update_evaluation.php?studentID=<?php echo $studentID?>'">Update Evaluation</button>
    <button class="button button6" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/delete_evaluation.php?studentID=<?php echo $studentID?>'">Delete Evaluation</button>
    <button class="button button6" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/dashboard.php'">Go Back</button>
</div>
</body>
</html>

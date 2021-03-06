<?php
session_start();
include 'php/config.php';
if (!isset($_SESSION['studentNo']) || strlen($_SESSION['studentNo']) == 0) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GLR.WEB is voor de studenten van Grafisch Lyceum Rotterdam om hun stage te registreren">
    <meta name="keywords" content="GLR, GLR.WEB, Stage, Stagewebsite, Grafisch Lyceum Rotterdam">
    <title>GLR.WEB - Create</title>
    <link rel="stylesheet" href="css/style_login.css" rel="stylesheet" type="text/css">
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
<div class="body">
    <h1>Add Internship</h1>
    <p>Add your internship information here.</p>
    <?php
    $nummer = $_SESSION['studentNo'];

    $check = "SELECT * FROM Stage_Student WHERE studentID = '$nummer'";

    $result= mysqli_query($link,$check);

    if (mysqli_num_rows($result) === 1) {
        echo "<table>";

        echo "<tr>";

        echo "<th>Name Of Company</th>";
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
        echo "</tr>";
        echo "</table>";

        echo "<br><strong>You already have a internship. You can make a new one by deleting it or update it.</strong><br><br>";
    } else {

   ?>
        <form action="php/create_student_verwerk.php" method="post">
        <label>Yes I have a contract</label>
        <input type="radio" class="css-input" name="contract" id="contract_y" value="Contract made"><br><br>
        <label>No I haven't</label>
        <input type="radio" class="css-input" name="contract" id="contract_n" value="No contract made"><br><br>

        <input type="date" class="css-input" name="datumBedrijf" required placeholder="Date of Start"><br><br>
        <input type="text" maxlength="100" class="css-input" name="naamBedrijf" required placeholder="Name of Company"><br><br>
        <input type="text" maxlength="5" class="css-input" name="studentID" required placeholder="<?php echo $_SESSION["studentNo"];?>" readonly value="<?php echo $_SESSION["studentNo"];?>"><br><br>
        <input type="text" maxlength="100" class="css-input" name="plaatsBedrijf" required placeholder="City"><br><br>
        <input type="text" class="css-input" name="linkBedrijf" required placeholder="URL"><br><br>
        <input type="text" maxlength="20" class="css-input" name="contactVoornaamBedrijf" required placeholder="Firstname Contactperson"><br><br>
        <input type="text" maxlength="50" class="css-input" name="contactAchternaamBedrijf" required placeholder="Lastname Contactperson"><br><br>

        <button type="submit" class="button button5">Login</button>
    </form>
  <?php
    }
      ?>
    <button class="button button5" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/dashboard.php'">Go Back</button>
</div>
</body>
</html>

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
<div class="dashboard">
    <h1>Welcome back, <?php echo $_SESSION['mentorNo']?></h1><br>
    <button class="button button8" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/overview_mentor.php'">See Internships</button></div>
</body>
</html>

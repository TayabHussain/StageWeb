<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GLR.WEB is voor de studenten van Grafisch Lyceum Rotterdam om hun stage te registreren">
    <meta name="keywords" content="GLR, GLR.WEB, Stage, Stagewebsite, Grafisch Lyceum Rotterdam">
    <title>GLR.WEB - Login</title>
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
                if (!isset($_SESSION['studentNo']) || strlen($_SESSION['studentNo']) == 0) {
                } else {
                    echo '<li><a href="dashboard.php">Dashboard</a></li>';

                }
                ?>
                <?php
                if (!isset($_SESSION['mentorNo']) || strlen($_SESSION['mentorNo']) == 0) {

                } else {
                    echo '<li><a href="dashboard_mentor.php">Dashboard</a></li>';
                }
                ?>
                <li><a href="login.php">Login</a></li>
                <li><a href="logout.php">Logout</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="body">
    <h1>Login Student</h1>
    <form action="php/login_vewerk.php" method="post">
        <input type="number" maxlength="5" class="css-input" name="studentNo" required placeholder="StudentNo."><br><br>
        <input type="password" maxlength="20" class="css-input" name="wachtwoord" required placeholder="Password"><br><br>
        <button type="submit" class="button button5">Login</button>
    </form>
    <br><br>
    <button class="button button5" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/login_mentor.php'">Mentor Login</button>
</div>
</body>
</html>

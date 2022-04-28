<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GLR.WEB is voor de studenten van Grafisch Lyceum Rotterdam om hun stage te registreren">
    <meta name="keywords" content="GLR, GLR.WEB, Stage, Stagewebsite, Grafisch Lyceum Rotterdam">
    <title>GLR.WEB - Contact</title>
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
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="body">
    <h1>Login</h1>
    <form action="php/login_vewerk.php" method="post">
        <input type="number" maxlength="5" class="css-input" name="studentnummer" required placeholder="StudentNo."><br><br>
        <input type="password" maxlength="20" class="css-input" name="password" required placeholder="Password"><br><br>
        <button type="submit" class="button button5">Login</button>
    </form>

</div>
</body>
</html>
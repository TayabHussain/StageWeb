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
      <title>GLR.WEB - Home</title>
    <link rel="stylesheet" href="css/master.css" rel="stylesheet" type="text/css">

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
                              <li><a href="#">Home</a></li>
                            <?php
                            if (!isset($_SESSION['studentNo']) || strlen($_SESSION['studentNo']) == 0) {
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

                            if (!isset($_SESSION['loggedin']) || strlen($_SESSION['loggedin']) == 0) {
                                echo '<li><a href="login.php">Login</a></li>';
                            }



                            ?>


                              <li><a href="contact.php">Contact</a></li>
                        </ul>
                  </div>
            </nav>
      </div>
      <div class="body">
            <h1><strong>Register your internship today.</strong></h1>
            <p>GLR Internship 2022</p>
            <button class="button button5" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/dashboard.php'">Register Now</button>
      </div>
</body>
</html>

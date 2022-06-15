<?php
require 'php/config.php';
session_start();

if (!isset($_SESSION['studentNo']) || strlen($_SESSION['studentNo']) == 0) {
    header("Location: index.php");
    exit;
}

// Get StudentNo
$studentID = $_GET['StudentID'];

if (is_numeric($studentID)) {
    $result = mysqli_query($link, "SELECT * FROM Stage_Student WHERE StudentID = '$studentID'");


    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
    } else {
        header("Location: no_update.php");
        exit();
    }
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
    <title>GLR.WEB - Update</title>
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
<div class="body">
    <h1>Add Internship</h1>
    <!--    <p>Add your internship information here.</p>-->
    <form action="php/update_student_verwerk.php" method="post">
        <input type="hidden" name="StudentID" value="<?php echo $studentID; ?>">
        <label>Yes I have a contract</label>
        <input type="radio" class="css-input" name="contract" id="contract_y" value="Contract made" <?php if($row['contract'] == 'Contract made') echo 'checked="checked"';?>><br><br>
        <label>No I haven't</label>
        <input type="radio" class="css-input" name="contract" id="contract_n" value="No contract made" <?php if($row['contract'] == 'No contract made') echo 'checked="checked"';?>><br><br>

        <input type="date" class="css-input" name="datumBedrijf" required value="<?php echo $row['datumBedrijf']; ?>"><br><br>
        <input type="text" maxlength="100" class="css-input" name="naamBedrijf" required value="<?php echo $row['naamBedrijf']; ?>"><br><br>
        <input type="text" maxlength="100" class="css-input" name="plaatsBedrijf" required value="<?php echo $row['plaatsBedrijf']; ?>"><br><br>
        <input type="text" class="css-input" name="linkBedrijf" required value="<?php echo $row['linkBedrijf']; ?>"><br><br>
        <input type="text" maxlength="20" class="css-input" name="contactVoornaamBedrijf" required value="<?php echo $row['contactVoornaamBedrijf']; ?>"><br><br>
        <input type="text" maxlength="50" class="css-input" name="contactAchternaamBedrijf" required value="<?php echo $row['contactAchternaamBedrijf']; ?>"><br><br>

        <button type="submit" class="button button5">Update</button>
    </form>
    <button class="button button5" onclick="location.href = 'https://85122.ict-lab.nl/BEROEPS/StageWebsite/dashboard.php'">Go Back</button>
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GLR.WEB is voor de studenten van Grafisch Lyceum Rotterdam om hun stage...">
    <meta name="keywords" content="GLR, GLR.WEB, Stage, Stagewebsite, Grafisch Lyceum Rotterdam">
    <title>GLR.WEB - Login</title>
    <link rel="stylesheet" href="css/style_login.css" type="text/css">
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
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </div>
    </nav>
</div>
<div class="body">
    <h1>Login</h1>
    <form action="php/login_vewerk.php">
        <input type="text" class="css-input" placeholder="First Name"><br><br>
        <input type="text" class="css-input" placeholder="Password"><br><br>
        <button type="submit" class="button button5">Login</button>
    </form>

</div>
</body>
</html>

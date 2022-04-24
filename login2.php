<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="GLR.WEB is voor de studenten van Grafisch Lyceum Rotterdam om hun stage...">
    <meta name="keywords" content="GLR, GLR.WEB, Stage, Stagewebsite, Grafisch Lyceum Rotterdam">
    <title>GLR.WEB - Login</title>
    <link rel="stylesheet" href="style_login.css" type="text/css">
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
<div class="page">
    <div class="container">
        <div class="left">
            <div class="login">Login</div>
            <div class="eula">By logging in you agree to the ridiculously long terms that you didn't bother to read</div>
        </div>
        <div class="right">
            <svg viewBox="0 0 320 300">
                <defs>
                    <linearGradient
                        inkscape:collect="always"
                        id="linearGradient"
                        x1="13"
                        y1="193.49992"
                        x2="307"
                        y2="193.49992"
                        gradientUnits="userSpaceOnUse">
                        <stop
                            style="stop-color:#ff00ff;"
                            offset="0"
                            id="stop876" />
                        <stop
                            style="stop-color:#ff0000;"
                            offset="1"
                            id="stop878" />
                    </linearGradient>
                </defs>
                <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
            </svg>
            <div class="form">
                <label for="email">Email</label>
                <input type="email" id="email">
                <label for="password">Password</label>
                <input type="password" id="password">
                <input type="submit" id="submit" value="Submit">
            </div>
        </div>
    </div>
</div>

</body>
</html>

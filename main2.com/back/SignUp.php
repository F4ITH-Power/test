<!---Ver 1.0.5(02.21.2022)--->
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="/front/style.css">    <!---CSS--->
</head>

<body>
<div class="header">
    <div class="header_section">
        <a href="/index.html"><article class="item"><div class="photo"><img class="photo2" src="/front/images/zxc-cat.gif" alt=""></div></article></a>
        <div class="header_item1 headerButton"><a href="/back/News.php">News</a></div>
        <div class="header_item1 headerButton"><a href="#">Suggest news</a></div>
        <div class="header_item1 headerButton"><a href="#">News in anticipation</a></div>
        <div class="header_item1 headerButton"><a href="#">Approved news</a></div>
        <div class="header_item1 headerButton"><a href="#">Personal Area</a></div>
    </div>
    <div class="header_section">
        <div class="header_item1 headerButton"><a href="/back/SignUp.php">Sign up</a></div>
        <div class="header_item1 headerButton"><a href="/back/LogIn.php"">Log in</a></div>
    </div>
</div>
<div class="wrapper">
    <form class="nice-form" method="get">    <!---PHP--->
        <label for="name">Sign Up</label>
        <input formaction="/back/timeUnix.php" class = "datepicker-toggle-button" type="date" id="start" name="date-start" required>
        <input formaction="/back/SignUpS.php" id="name" name = "userName" type="text" placeholder="Name" class="checked">
        <input formaction="/back/SignUpS.php" id="password" class="checked" name = "userPassword" placeholder="Password" type="password">
        <input formaction="/back/SignUpS.php" type="submit" value="SUBMIT" name="send" disabled class="check-button">
    </form>
</div>
<script type="text/javascript" src="/front/main.js"></script>  <!---JS--->
</body>


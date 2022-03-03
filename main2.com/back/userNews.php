<?php
require_once ('config.php');
//global $conn;
?>
<!---Ver 1.0.5(02.21.2022)--->
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <title>Suggest News</title>
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
    <form class="nice-form" method="POST">    <!---PHP--->
        <label for="name">Suggest news</label>
        <input formaction="UserNewsSubmit.php" id="title" name = "title" type="text" placeholder="Title" class="checked">
        <input formaction="UserNewsSubmit.php" id="text" class="checked" name = "text" placeholder="Text" type="text">
        <input formaction="UserNewsSubmit.php" type="submit" value="SUBMIT" name="send" disabled class="check-button">
    </form>
</div>
<script type="text/javascript" src="/front/main.js"></script>  <!---JS--->
</body>
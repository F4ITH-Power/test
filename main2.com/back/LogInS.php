<!---Ver 1.0.5(02.21.2022)--->

<title>Log In successful</title>

<link rel='stylesheet' href='/front/style.css'>
<?php
$back = $_SERVER['HTTP_REFERER'];   //  Writing to the variable of the last visited page

date_default_timezone_set('Europe/London');


// Check on GET
if ((isset($_GET['userName']) && trim($_GET['userName']) !== '') && (isset($_GET['userPassword']) && trim($_GET['userPassword'])!== ''))
{   // Saving entered data into variables
    $login = $_GET['userName'];
    $password = $_GET['userPassword'];
    $arr = array   // create array
    (
        'userName' => $login,
        'userPassword' => $password,
    );
}
else   // Return to home page
{
    echo "
    <html>
    <head>
    <meta http-equiv='Refresh' content='0; URL=".$back."'>
    </head>
    </html>";
    echo "<script>
    alert ('Error')
    </script>";
}
?>

<div class="header">
    <div class="header_section">
        <a href="/index.html"><article class="item"><div class="photo"><img class="photo2" src="/front/images/zxc-cat.gif" alt=""></div></article></a>
        <div class="header_item1 headerButton"><a href="#">News</a></div>
        <div class="header_item1 headerButton"><a href="#">Suggest news</a></div>
        <div class="header_item1 headerButton"><a href="#">News in anticipation</a></div>
        <div class="header_item1 headerButton"><a href="#">Approved news</a></div>
        <div class="header_item1 headerButton"><a href="#">Personal Area</a></div>
    </div>
    <div class="header_section">
        <div class="header_item1 headerButton"><a href="/back/SignUp.php">Sign up</a></div>
        <div class="header_item1 headerButton"><a href="/back/LogIn.php">Log in</a></div>
    </div>
</div>
<!---Text output--->
<div class="page2">
    <?php echo "Log In Successful</br>"; ?>
    Your Username - <?php echo $arr['userName']; ?>(<?php echo mb_strlen($_GET["userName"]); ?> signifier) <br/>
    Your Password - <?php echo $arr['userPassword']; ?>(<?php echo mb_strlen($_GET["userPassword"]); ?> signifier)<br/>
    <?php
    require_once 'timeUnix.php';
    require_once 'usersDataBase.php';
    ?>
</div>
</div>

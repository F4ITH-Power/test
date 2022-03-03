<!---Ver 1.0.5(02.21.2022)--->

<title>Suggest news successfully</title>

<link rel='stylesheet' href='/front/style.css'>
<?php

require('config.php');

global $conn;

$back = $_SERVER['HTTP_REFERER'];   //  Writing to the variable of the last visited page

date_default_timezone_set('Europe/London');


// Check on GET
if ((isset($_POST['title']) && trim($_POST['title']) !== '') && (isset($_POST['text']) && trim($_POST['text'])!== ''))
{   // Saving entered data into variables
    $title = $_POST['title'];
    $text = $_POST['text'];
    $arr = array   // create array
    (
        'title' => $title,
        'text' => $text,
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
        <div class="header_item1 headerButton"><a href="/back/News.php">News</a></div>
        <div class="header_item1 headerButton"><a href="/back/userNews.php">Suggest news</a></div>
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
    <?php echo "Новость успешно предложена</br>"; ?>
    Заголовок - <?php echo $arr['title']; ?>(<?php echo mb_strlen($_POST["title"]); ?> signifier) <br/>
    Текст - <?php echo $arr['text']; ?>(<?php echo mb_strlen($_POST["text"]); ?> signifier)<br/>
    <?php
    require_once 'config.php';
    $sql = "CREATE TABLE suggestNews(
    id BIGINT (30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR (255) NOT NULL,
    text VARCHAR (MAX) NOT NULL
    )";
    $sql = "INSERT INTO suggestNews (title, text) VALUES ('$title', '$text')";
    if ($conn->query($sql) === TRUE)
    {
        echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $query_select = 'SELECT * FROM suggestnews';

    $result = $conn->query($query_select) ;
    echo "</br>";
    if ($result->num_rows > 0)
    {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            echo "id: "." ". $row["id"] ."|". $row["title"] ."|". $row["text"] . "<br>";
        }
    }
    else
    {
        echo "0 results";
    }
    ?>
</div>
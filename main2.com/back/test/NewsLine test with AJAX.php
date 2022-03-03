<?php
//require('back/config.php');
//global $conn;

$servername = "localhost";
$database = "main";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
?>
<script>
var objXMLHttpRequest = new XMLHttpRequest();
objXMLHttpRequest.onreadystatechange = function() {
    if(objXMLHttpRequest.readyState === 4) {
        if(objXMLHttpRequest.status === 200) {
            alert(objXMLHttpRequest.responseText);
        } else {
            alert('Error Code: ' +  objXMLHttpRequest.status);
            alert('Error Message: ' + objXMLHttpRequest.statusText);
        }
    }
}
objXMLHttpRequest.open('GET', 'request_ajax_data.php');
objXMLHttpRequest.send();
</script>
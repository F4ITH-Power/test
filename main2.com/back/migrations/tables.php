<?php

require_once ('config.php');
global $conn;

$sql = "CREATE TABLE suggestNews(
id BIGINT (30) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
title VARCHAR (255) NOT NULL,
text VARCHAR (MAX) NOT NULL
)";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
}
else
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
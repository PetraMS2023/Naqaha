<?php

$servername = '127.0.0.1:3306';
$username = "u780943782_Nqaha2024";
$password = "M2m*cE$@a";
$dbname = "u780943782_Nqaha2024";



$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

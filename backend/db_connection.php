<?php
$servername = "127.0.0.1";
$username = "u780943782_Albaseel";
$password = "PkU+@om;3";
$dbname = "u780943782_Albaseel";
$port = 3306;


$conn = new mysqli($servername, $username, $password, $dbname, $port);


if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
} 


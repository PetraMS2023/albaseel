<?php
require 'db_connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
    
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: ../Dashboard/pages/home.php");
        exit();
    } else {
        header("Location: ../Dashboard/index.php");
    }

    $stmt->close();
    $conn->close();
}


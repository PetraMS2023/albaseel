<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $phone_number = $_POST['phone_number'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_form (full_name, phone_number, email, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $full_name, $phone_number, $email, $message);

    if ($stmt->execute()) {
        
        header("Location: ../pages/contact.php?status=success");
        exit();
    } else {
        echo "حدث خطأ أثناء إرسال الرسالة.";
    }

    $stmt->close();
    $conn->close();
}
?>
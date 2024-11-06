<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $members = $_POST['members'];
    $clients = $_POST['clients'];
    $projects = $_POST['projects'];
    $customer_feedback = $_POST['customer_feedback'];

 
    $sql = "SELECT id FROM statistics LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        $sql = "UPDATE statistics SET members = ?, clients = ?, projects = ?, customer_feedback = ? WHERE id = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiii", $members, $clients, $projects, $customer_feedback);
    } else {
        
        $sql = "INSERT INTO statistics (members, clients, projects, customer_feedback) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("iiii", $members, $clients, $projects, $customer_feedback);
    }

    if ($stmt->execute()) {
        header("Location: ../Dashboard/pages/contact-info.php");
    } else {
        echo "حدث خطأ أثناء حفظ التعديلات.";
    }

    $stmt->close();
    $conn->close();
}
?>

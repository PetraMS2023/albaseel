<?php
require 'db_connection.php';

if (isset($_GET['id'])) {
    $contact_id = $_GET['id'];

   
    $sql = "DELETE FROM contact_form WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $contact_id);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: ../Dashboard/pages/emails.php");
    exit();
} else {
    echo "لم يتم تحديد معرّف الاتصال.";
}
?>

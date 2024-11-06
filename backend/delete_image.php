<?php
require 'db_connection.php';

if (isset($_GET['id'])) {
    $image_id = $_GET['id'];

    $sql = "SELECT image_path FROM project_images WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    if (file_exists($row['image_path'])) {
        unlink($row['image_path']);
    }
    $stmt->close();

    $sql = "DELETE FROM project_images WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $image_id);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}
?>

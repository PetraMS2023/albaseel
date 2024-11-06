<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_id = $_POST['project_id'];
    $project_name = $_POST['project_name'];
    $project_status = $_POST['project_status'];
    $project_location = $_POST['project_location'];
    $project_description = $_POST['project_description'];

    // تحديث بيانات المشروع
    $sql = "UPDATE projects SET project_name = ?, project_status = ?, project_location = ?, project_description = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $project_name, $project_status, $project_location, $project_description, $project_id);
    $stmt->execute();

    $uploadDir = '../uploads/';  

    
    foreach ($_FILES['before_images']['tmp_name'] as $key => $tmpName) {
        $fileName = basename($_FILES['before_images']['name'][$key]);
        $uploadFile = $uploadDir . $fileName;

        if (move_uploaded_file($tmpName, $uploadFile)) {
            $sql = "INSERT INTO project_images (project_id, image_path, image_type) VALUES (?, ?, 'before')";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("is", $project_id, $uploadFile);
            $stmt->execute();
        }
    }

   
    foreach ($_FILES['after_images']['tmp_name'] as $key => $tmpName) {
        $fileName = basename($_FILES['after_images']['name'][$key]);
        $uploadFile = $uploadDir . $fileName;

        if (move_uploaded_file($tmpName, $uploadFile)) {
            $sql = "INSERT INTO project_images (project_id, image_path, image_type) VALUES (?, ?, 'after')";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("is", $project_id, $uploadFile);
            $stmt->execute();
        }
    }

    echo "تم تحديث المشروع بنجاح!";
    header("Location: ../Dashboard/pages/edit-project.php?id=" . $project_id);
    exit();
}
?>

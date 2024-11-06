<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = $_POST['project_name'];
    $project_name_ar = $_POST['project_name_ar'];
    $project_status = $_POST['project_status'];
    $project_location = $_POST['project_location'];
    $project_description = $_POST['project_description'];
    $project_description_ar = $_POST['project_description_ar'];

    // إدخال بيانات المشروع
    $sql = "INSERT INTO projects (project_name, project_name_ar, project_status, project_location, project_description, project_description_ar) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $project_name, $project_name_ar, $project_status, $project_location, $project_description, $project_description_ar);
    $stmt->execute();
    $project_id = $stmt->insert_id;

    $uploadDir = '../uploads/'; 

    // معالجة الصور قبل
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

    // معالجة الصور بعد
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

    header("Location: ../Dashboard/pages/project.php");
    $stmt->close();
    $conn->close();
} else {
    echo "الرجاء ملء جميع الحقول المطلوبة.";
}
?>

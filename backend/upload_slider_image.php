<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES['image_file'])) {
    $image_name = $_POST['image_name'];
    $uploadDir = '../uploads/slider/'; 
    $uploadFile = $uploadDir . basename($_FILES['image_file']['name']);

    
    if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadFile)) {
        
        $sql = "INSERT INTO slider_images (image_path) VALUES (?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $uploadFile);

        if ($stmt->execute()) {
            header("Location: ../Dashboard/pages/setting.php");
        } else {
            echo "حدث خطأ أثناء حفظ الصورة.";
        }

        $stmt->close();
    } else {
        echo "حدث خطأ أثناء رفع الملف.";
    }

    $conn->close();
} else {
    echo "الرجاء اختيار ملف للرفع.";
}
?>

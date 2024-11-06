<?php
require 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $about_ar = $_POST['about_ar'];
    $about_en = $_POST['about_en'];

  
    $sql = "SELECT id FROM about_us LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        $sql = "UPDATE about_us SET about_ar = ?, about_en = ? WHERE id = 1";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $about_ar, $about_en);
    } else {
       
        $sql = "INSERT INTO about_us (about_ar, about_en) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $about_ar, $about_en);
    }

    if ($stmt->execute()) {
        header("Location: ../Dashboard/pages/about-us.php");
    } else {
        echo "حدث خطأ أثناء حفظ التعديلات.";
    }

    $stmt->close();
    $conn->close();
}
?>

<?php
require '../backend/db_connection.php';


header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');

$sql = "SELECT projects.id, project_images.image_path 
        FROM projects 
        LEFT JOIN project_images 
        ON projects.id = project_images.project_id 
        AND project_images.image_type = 'before' 
        GROUP BY projects.id 
        LIMIT 6";

$result = $conn->query($sql);

$data = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = [
            'image_path' => $row['image_path'],
            'id' => $row['id']
        ];
    }
}

echo json_encode($data);

$conn->close();
?>

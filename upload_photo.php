<?php
include("db.php"); // must return $conn (pg_connect)

ob_start();
// Create uploads folder if not exists
if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
}

// Get POST values
$name         = $_POST['name'] ?? '';
$photographer = $_POST['photographer'] ?? '';
$price        = $_POST['price'] ?? '';
$class        = $_POST['class'] ?? '';

// Map class to label
$classLabels = [
    "col-span-2 row-span-3" => "FEATURED EDITORIAL",
    "col-span-1 row-span-2" => "NATURE",
    "col-span-2 row-span-2" => "LANDSCAPE",
    "col-span-1 row-span-1" => "SMALL"
];

$imageText = $classLabels[$class] ?? 'FEATURED';

// Handle uploaded file
if (isset($_FILES['photo']) && $_FILES['photo']['error'] === 0) {
    $filename = time() . "_" . basename($_FILES["photo"]["name"]);
    $target   = "uploads/" . $filename;

    if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target)) {
        die("Failed to upload file.");
    }
} else {
    die("No file uploaded or upload error.");
}

// Insert into PostgreSQL
$sql = "INSERT INTO photos (name, photographer, price, image, class, imagetext) 
        VALUES ($1, $2, $3, $4, $5, $6)";

$result = pg_query_params($conn, $sql, [$name, $photographer, $price, $target, $class, $imageText]);

if (!$result) {
    die("Error inserting photo: " . pg_last_error($conn));
}

// Redirect safely
header("Location: shop.php?uploaded=1");
exit;
?>

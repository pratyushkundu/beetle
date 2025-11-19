<?php
include("db.php"); // must return $conn (pg_connect)

// Stop any accidental output
ob_start();

// Create uploads folder if not exists
if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
}

// Get POST values
$name        = $_POST['name'] ?? '';
$photographer= $_POST['photographer'] ?? '';
$price       = $_POST['price'] ?? '';
$class       = $_POST['class'] ?? '';

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

// Convert class to uppercase for imageText
$imageText = strtoupper($class);

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





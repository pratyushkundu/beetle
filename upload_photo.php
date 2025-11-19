<?php
include("db.php");

// Create uploads folder if not exists
if (!is_dir("uploads")) {
    mkdir("uploads", 0777, true);
}

$name = $_POST['name'];
$photographer = $_POST['photographer'];
$price = $_POST['price'];
$class = $_POST['class'];

$filename = time() . "_" . basename($_FILES["photo"]["name"]);
$target = "uploads/" . $filename;

move_uploaded_file($_FILES["photo"]["tmp_name"], $target);

// Convert class to uppercase label
$imageText = strtoupper($class);

// Insert into PostgreSQL
$sql = "INSERT INTO photos (name, photographer, price, image, class, imagetext)
        VALUES ($1, $2, $3, $4, $5, $6)";

$result = pg_query_params($conn, $sql, [$name, $photographer, $price, $target, $class, $imageText]);

if (!$result) {
    echo "Error inserting photo: " . pg_last_error($conn);
    exit;
}

header("Location: shop.php?uploaded=1");
exit;
?>




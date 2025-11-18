<?php
include("db.php");  // MUST return a PDO object named $conn

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

$stmt = $conn->prepare($sql);
$stmt->execute([$name, $photographer, $price, $target, $class, $imageText]);

header("Location: shop.php?uploaded=1");
exit;
?>



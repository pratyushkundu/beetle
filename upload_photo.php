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

// Upload image
$filename = time() . "_" . basename($_FILES["photo"]["name"]);
$target = "uploads/" . $filename;

move_uploaded_file($_FILES["photo"]["tmp_name"], $target);
$imageText = strtoupper($class_label);


// Insert DB record
$sql = "INSERT INTO photos (name, photographer, price, image, class, imageText) 
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssss", $name, $photographer, $price, $target, $class, $imageText);
$stmt->execute();

$stmt->close();
$conn->close();

header("Location: shop.php?uploaded=1");
exit;
?>


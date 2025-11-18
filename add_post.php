<!-- <?php
include('db.php');

$title = $_POST['title'];
$category = $_POST['category'];
$author = $_POST['author'];
$content = $_POST['content'];
$image = "";

if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
  $targetDir = "uploads/";
  if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);
  $image = basename($_FILES['image']['name']);
  move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $image);
}

$stmt = $conn->prepare("INSERT INTO blogs (title, category, author, content, image) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $title, $category, $author, $content, $image);

if ($stmt->execute()) {
  echo "<script>alert('✅ Blog posted successfully!'); window.location='portfolio-blog.php';</script>";
} else {
  echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?> -->

<?php
include('db.php'); // PostgreSQL connection

$title    = trim($_POST['title']);
$category = trim($_POST['category']);
$author   = trim($_POST['author']);
$content  = trim($_POST['content']);
$image    = "";

// Handle image upload
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
    $targetDir = "uploads/";
    if (!is_dir($targetDir)) mkdir($targetDir, 0777, true);

    $image = time() . "_" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $targetDir . $image);
}

// PostgreSQL INSERT using parameterized query
$sql = "INSERT INTO blogs (title, category, author, content, image)
        VALUES ($1, $2, $3, $4, $5)";

$values = [$title, $category, $author, $content, $image];

$result = pg_query_params($conn, $sql, $values);

if ($result) {
    echo "<script>
            alert('✅ Blog posted successfully!');
            window.location='portfolio-blog.php';
          </script>";
} else {
    echo 'Error: ' . pg_last_error($conn);
}

pg_close($conn);
?>

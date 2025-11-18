

<?php
header("Content-Type: application/json");

include('db.php'); // PostgreSQL connection

// Validate ID
if (!isset($_GET['id'])) {
    echo json_encode(["error" => "No ID provided"]);
    exit;
}

$id = intval($_GET['id']); // safe integer

// Use parameterized query (prevents SQL injection)
$sql = "SELECT * FROM blogs WHERE id = $1 LIMIT 1";
$result = pg_query_params($conn, $sql, [$id]);

// Validate result
if (!$result || pg_num_rows($result) == 0) {
    echo json_encode(["error" => "Blog not found"]);
    exit;
}

$row = pg_fetch_assoc($result);

// Format image URL
$image = !empty($row['image'])
    ? "uploads/" . $row['image']
    : "https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=800&h=600&fit=crop";

// JSON Response
echo json_encode([
    "id"       => $row["id"],
    "title"    => $row["title"],
    "category" => $row["category"],
    "author"   => $row["author"],
    "image"    => $image,
    "date"     => date("M d, Y", strtotime($row["created_at"])),
    "content"  => nl2br($row["content"])   // preserve formatting
]);
?>

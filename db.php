<!-- <?php
$servername = "localhost";
$username = "root";
$password = ""; // default is blank for XAMPP
$dbname = "blog_system";

$conn = new mysqli($servername, $username, $password, $dbname, 3306);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?> -->


<?php
$host = getenv("DB_HOST");
$user = getenv("DB_USER");
$pass = getenv("DB_PASS");
$db   = getenv("DB_NAME");

$conn = pg_connect("host=$host dbname=$db user=$user password=$pass");

if (!$conn) {
    die("Database Connection Failed.");
}
?>

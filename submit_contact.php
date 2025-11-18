


<?php
include 'db.php'; // PostgreSQL connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Escape values (PostgreSQL doesn't use real_escape_string)
    $first_name = trim($_POST['first_name']);
    $last_name  = trim($_POST['last_name']);
    $email      = trim($_POST['email']);
    $phone      = trim($_POST['phone']);
    $subject    = trim($_POST['subject']);
    $message    = trim($_POST['message']);

    // SQL Insert using PostgreSQL safe parameters
    $sql = "INSERT INTO contact_messages 
            (first_name, last_name, email, phone, subject, message)
            VALUES ($1, $2, $3, $4, $5, $6)";

    $values = [
        $first_name,
        $last_name,
        $email,
        $phone,
        $subject,
        $message
    ];

    $result = pg_query_params($conn, $sql, $values);

    if ($result) {
        echo "<script>
                alert('Message sent successfully!');
                window.location.href='contact.php';
              </script>";
    } else {
        echo "<script>
                alert('Failed to send message. Try again.');
                window.location.href='contact.php';
              </script>";
    }
}
?>

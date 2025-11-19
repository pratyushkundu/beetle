<?php
include 'db.php';

$sql = "

-- BLOGS TABLE
CREATE TABLE IF NOT EXISTS blogs (
    id SERIAL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    category VARCHAR(100),
    author VARCHAR(100),
    content TEXT,
    image VARCHAR(255),
    views INTEGER DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
);

-- CONTACT MESSAGES TABLE
CREATE TABLE IF NOT EXISTS contact_messages (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    email VARCHAR(200),
    phone VARCHAR(50),
    subject VARCHAR(255),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- PHOTOS TABLE
CREATE TABLE IF NOT EXISTS photos (
    id SERIAL PRIMARY KEY,
    name VARCHAR(255),
    photographer VARCHAR(255),
    price VARCHAR(50),
    image VARCHAR(255),
    imageText VARCHAR(255),
    class VARCHAR(50),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

";

$result = pg_query($conn, $sql);

if ($result) {
    echo "<h2>✅ Tables created successfully!</h2>";
} else {
    echo "<h2>❌ Error creating tables:</h2>";
    echo pg_last_error($conn);
}
?>

<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "instagram";

$conn = mysqli_connect($host, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$queryCreateDatabase = "CREATE DATABASE IF NOT EXISTS $database";
if (!mysqli_query($conn, $queryCreateDatabase)) {
    die("Error creating database: " . mysqli_error($conn));
}

if (!mysqli_select_db($conn, $database)) {
    die("Error selecting database: " . mysqli_error($conn));
}

$queryCreateTableuser = "CREATE TABLE IF NOT EXISTS user (
    user_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    f_name TEXT NOT NULL,
    l_name TEXT NOT NULL,
    user_name TEXT NOT NULL,
    describe_user VARCHAR(255),
    Relationship TEXT NOT NULL,
    user_pass VARCHAR(255),
    user_email VARCHAR(255),
    user_country TEXT NOT NULL,
    user_gender TEXT NOT NULL,
    user_birthday TEXT NOT NULL,
    user_image VARCHAR(255),
    user_cover VARCHAR(255),
    user_reg_date  TIMESTAMP CURRENT_TIMESTAMP,
    status TEXT NOT NILL,
    posts TEXT NOT NULL
)";

if (!mysqli_query($conn, $queryCreateTableuser)) {
    die("Error creating user table: " . mysqli_error($conn));
}


$queryCreateTableposts = "CREATE TABLE IF NOT EXISTS posts (
    post_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    user_id INT(11) NOT NULL,
    post_content VARCHAR(255),
    upload_image VARCHAR(255),
    post_date TIMESTAMP CURRENT_TIMESTAMP
)";

if (!mysqli_query($conn, $queryCreateTableposts)) {
    die("Error creating student_queue table: " . mysqli_error($conn));
}

$queryCreateTableposts = "CREATE TABLE IF NOT EXISTS comments (
    com_id INT(11) PRIMARY KEY AUTO_INCREMENT,
    post_id INT(11) NOT NULL,
    user_id INT(11) NOT NULL,
    comment VARCHAR(255),
    comment_author VARCHAR(255),
    date TIMESTAMP CURRENT_TIMESTAMP
)";

if (!mysqli_query($conn, $queryCreateTablecomments)) {
    die("Error creating student_queue table: " . mysqli_error($conn));
}

mysqli_close($conn);
?>
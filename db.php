<?php
$host = "";
$user = "";   // change if needed
$pass = "";       // add your password if any
$dbname = "";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
<?php
$host = "sushantkhairnar.infinityfreeapp.com";
$user = "if0_40339876";   // change if needed
$pass = "CsgVteBqKa";       // add your password if any
$dbname = "if0_40339876_doctor_db";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}
?>
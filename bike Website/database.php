<?php
// make connection
$conn = new mysqli("localhost","root","root","contact");

// Check connection
if ($conn -> connect_errno) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}
?>
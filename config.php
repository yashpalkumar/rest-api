<?php
// $servername = "sql12.freesqldatabase.com";
// $username = "sql12601583";
// $password = "z6jiJTrM6S";
// $dbname = "sql12601583";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employee";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
echo "Connected Error";
}
echo "Connected successfully";
?> 
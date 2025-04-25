<?php
include_once "env.php";

$servername = $env["SERVERNAME_DB"];
$username = $env["USERNAME_DB"];
$password = $env["PASSWORD_DB"];
$dbname = $env["DBNAME"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

<?php

$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'arkatama_dummy';

$conn = new mysqli($hostname, $username, $password, $database);
if ($conn->connect_error) {
  die('Connection Failed: ' . $conn->connect_error);
};

mysqli_select_db($conn, $database);

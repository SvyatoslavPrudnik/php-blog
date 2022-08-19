<?php

const HOST = 'localhost';
const USERNAME = 'root';
const PASSWORD = 'root';
const DATABASE = 'php-blog';

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
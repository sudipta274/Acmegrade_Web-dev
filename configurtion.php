<?php

$user = 'root';

$password = '';

$db = 'acme24_jul';

$host = 'localhost';

$port = 3307;

$conn = mysqli_connect($host, $user, $password, $db, $port);

if (!$conn) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
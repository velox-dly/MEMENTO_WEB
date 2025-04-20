<?php
$host = "localhost";
$dbname = "memento"; // Confirm this matches your database name
$username = "root";
$password = "diosalee22"; // If you set a password, update this

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

return $mysqli;
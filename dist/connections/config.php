<?php
$servername = "localhost";
$username = "admin";
$password = "password";
$db = "capstone";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);


$encodedData = file_get_contents('php://input');  // take data from react native fetch API
$decodedData = json_decode($encodedData, true);

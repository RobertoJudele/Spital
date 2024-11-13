<?php
// Set response headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Example of handling a GET request with a query parameter
$name = isset($_GET['name']) ? $_GET['name'] : 'World';

// Example response
$response = [
    "status" => "success",
    "message" => "Hello, $name!",
    "timestamp" => date("Y-m-d H:i:s")
];

// Return the response as JSON
echo json_encode($response);
?>

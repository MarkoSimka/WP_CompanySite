<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$apiUrl = 'https://regression.pabau.me/OAuth2/leads/lead-curl.php';
$apiKey = 'MTIzMDgbd283795c5e51d3b7efd4aefbc404fb8';

// Read the incoming POST data
$postData = file_get_contents("php://input");

// Initialize cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'apiKey: ' . $apiKey
));

// Execute the request
$response = curl_exec($ch);

// Close cURL session
curl_close($ch);

// Output the response
echo $response;

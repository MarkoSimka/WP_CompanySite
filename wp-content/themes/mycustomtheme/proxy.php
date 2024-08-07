<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

$apiUrl = 'https://regression.pabau.me/OAuth2/leads/lead-curl.php';

// Collect the POST data
$apiKey = $_POST['api_key'] ?? '';
$firstName = $_POST['firstName'] ?? '';
$lastName = $_POST['lastName'] ?? '';
$email = $_POST['email'] ?? '';
$lead_source = $_POST['lead_source'] ?? '';
$salutation = $_POST['salutation'] ?? '';
$dob = $_POST['dob'] ?? '';
$county = $_POST['county'] ?? '';
$country = $_POST['country'] ?? '';
$city = $_POST['city'] ?? '';
$telephone = $_POST['telephone'] ?? '';
$mobile = $_POST['mobile'] ?? '';
$address = $_POST['address'] ?? '';
$post_code = $_POST['post_code'] ?? '';
$treatment_interest = $_POST['treatment_interest'] ?? '';
$opt_email = $_POST['opt_email'] ?? '';

// Prepare the data for cURL
$data = [
    'api_key' => $apiKey,
    'Fname' => $firstName,
    'Lname' => $lastName,
    'email' => $email,
    'lead_source' => $lead_source,
    'salutation' => $salutation,
    'dob' => $dob,
    'county' => $county,
    'country' => $country,
    'city' => $city,
    'telephone' => $telephone,
    'mobile' => $mobile,
    'address' => $address,
    'post_code' => $post_code,
    'treatment_interest' => $treatment_interest,
    'opt_email' => $opt_email
];

// Initialize cURL
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded'
));

// Execute the request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Output the response
echo $response;

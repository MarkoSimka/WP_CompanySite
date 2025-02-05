<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");

// Function to load the .env file and retrieve the API key
function getApiKeyFromEnv() {
    $envFile = __DIR__ . '/.env'; // Adjust the path to where your .env file is located
    $apiKey = '';

    if (file_exists($envFile)) {
        $lines = file($envFile);
        foreach ($lines as $line) {
            // Ignore empty lines or comments
            if (empty($line) || $line[0] === '#') {
                continue;
            }

            // Split the key-value pair from the .env file
            list($key, $value) = explode('=', trim($line), 2);
            if ($key === 'REDACTED_API_KEY') {
                $apiKey = trim($value);
            }
        }
    } else {
        echo json_encode(['error' => 'Environment file not found']);
        exit; // Exit if .env file is not found
    }

    return $apiKey;
}

// Fetch the API key from .env
$apiKey = getApiKeyFromEnv();

// Collect POST data
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
$opt_letter = $_POST['opt_letter'] ?? '';
$opt_sms = $_POST['opt_sms'] ?? '';
$opt_newsletter = $_POST['opt_newsletter'] ?? '';
$opt_phone = $_POST['opt_phone'] ?? '';
$redirect_link = $_POST['redirect_link'] ?? '';

// Prepare data for cURL
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
    'opt_email' => $opt_email,
    'opt_letter' => $opt_letter,
    'opt_sms' => $opt_sms,
    'opt_newsletter' => $opt_newsletter,
    'opt_phone' => $opt_phone,
    'redirect_link' => $redirect_link
];

// cURL request to the external API
$apiUrl = 'https://regression.pabau.me/OAuth2/leads/lead-curl.php';
$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/x-www-form-urlencoded'
));

// Execute the cURL request and capture the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
    exit;
}

// Close the cURL session
curl_close($ch);

// Output the response
echo $response;
?>

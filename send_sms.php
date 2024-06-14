<?php
$mobile = "91".$_POST['mobile'];
$msg = $_POST['msg'];

// Account details
$apiKey = urlencode('NzE3NjdhNzY1NDUzNTYzNDRhNzU3NzYzNjI1NjcwNDU=');
// Message details
$numbers = array($mobile);
$sender = urlencode('600010');
$message = rawurlencode('Hi there, thank you for sending your first test message from Textlocal. See how you can send effective SMS campaigns here: https://tx.gl/r/2nGVj/');
 
$numbers = implode(',', $numbers);
 
// Prepare data for POST request
$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
// Send the POST request with cURL
$ch = curl_init('https://api.textlocal.in/send/');
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);
// Process your response here
echo $response;


?>
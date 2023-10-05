<?php
// INCLUDING PAYMENT FUNCTIONS
require_once("paymentFunction.php");
// RESPONSE OBJECT
$response_object = new stdClass();
// RESPONSE CODE (ERROR AND OTHER STATUS HANDLING)
$code = 0;
// GET RAW DATA FROM  REQUEST OBJECT BODY
$data = file_get_contents("php://input");
// GET REQUEST JSON
$json = json_decode($data);
// REGULAR EXPRESSION FOR MOBILE AND EMAIL VALIDATION
$email_regex = '/^\\S+@\\S+\\.\\S+$/';
$mobile_regex = '/^7|0|(?:\+94)[0-9]{9,10}$/';
// CHECK VALUES ARE AVAILABE
if (!isset($json->name)) {
    $code = 20; //NAME IS NOT SET
} else if (!isset($json->email)) {
    $code = 21; // EMAil IS NOT SET
} else if (!isset($json->mobile)) {
    $code = 22; //MOBILE IS NOT SET
} else if (!isset($json->amount)) {
    $code = 23; //DONATION AMOUNT IS NOT SET
} else if (!isset($json->donationType)) {
    $code = 24; //DONATION TYPE NOT SELECTED
} else if (!preg_match($email_regex, $json->email)) {
    $code = 25; //INVALID EMAIL ADDRESS
} else if (!strlen($json->mobile) == 10) {
    $code = 26; //INVALIED MOBILE NUMBER
} else if (!preg_match($mobile_regex, $json->mobile)) {
    $code = 26; //INVALID MOBILE NUMBER
} else if ($json->amount < 1000) {
    $code = 27; //LESS  AMOUNT
} else if ($json->amount > 300000) {
    $code = 28; //REACH MAXIMUM TRANSACTION VALUE
} else if ($json->email == null) {
    $code = 29; //EMAIL IS NULL
} else if ($json->donationType == null) {
    $code = 30; //DONATION TYPE NOT SELECTED
} else {
    // ALLOW TO PAYMENT
    // CREATE NEW PAYMENT CLASS
    $payment = new Payment($json->amount, $json->name, $json->email, $json->mobile, $json->donationType);
    // GET PAYMENT OBJECT
    $response_object->paymentObject = $payment->generatePaymentObject();
    // SUCCESS CODE
    $code = 100;
}
// ASSIGN RESPONSE CODE TO RESPONSE OBJECT
$response_object->code = $code;
// ECHO JSON STRING
echo (json_encode($response_object));

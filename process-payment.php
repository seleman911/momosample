<?php

// process-payment.php

// Require Flutterwave PHP package
require('flutterwave-php/src/Flutterwave.php');

// Get form data
$phone = $_POST['phone'];
$amount = $_POST['amount'];

// Flutterwave payment config
$payment = [
  'publicKey' => 'FLWPUBK-1-X',
  'txRef' => 'momo-pay-'.time(),
  'amount' => $amount,
  'payment_options' => 'mobilemoneyrwanda',
  'meta' => [
    'consumer_id' => 23
  ],
  'customer' => [
    'email' => 'user@email.com',
    'phoneNumber' => $phone,
    'name' => 'John Doe'
  ],
  'callback' => 'https://example.com/callback',
  'onclose' => 'https://example.com/closed'
];

// Make payment  
$flw = new FlutterwaveAPI();
$response = $flw->MobileMoney->rwanda($payment);

// Redirect based on response
if($response['status'] === 'success') {
  // Verify transaction before completing
  header('Location: verification-page.php'); 
} else {
  header('Location: payment-failed.php');
}

?>
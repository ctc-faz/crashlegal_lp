<?php
// Get the PHP helper library from twilio.com/docs/php/install
error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/twilio-php-master/Twilio/autoload.php'; // Loads the library

use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account

$sid = "AC2ac9630e988a6bfa5712ff3bf7a483c5"; //production
$token = "89189678d13a0cac04e825864bc0cb16"; //production
// $sid = "AC7a5c2407587301b17c08780a2da52fe4";
// $token = "3bad29c34ab1ef1224e6e4a5f108b80b";

$phoneNumber = "+1" . $_POST['phoneNumber'];

header('Content-type: application/json');

if (empty($_POST['phoneNumber'])) {
  echo json_encode(array("isPhoneValid" => false));
} else {
  $client = new Client($sid, $token);
  $number = $client->lookups->phoneNumbers($phoneNumber)
  ->fetch(array("type" => "carrier"));

    $result = array("isPhoneValid" => false);

    if ($number->carrier['name']) {
      $result = array("isPhoneValid" => true, "name" => $number->carrier['name']);
    }

    echo json_encode($result);
}


?>

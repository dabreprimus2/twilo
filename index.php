<?php
// this line loads the library
// require('Twilio.php');
// use vendor\twilio\sdk\Twilio\Rest\Client;
error_reporting(E_ALL);
require_once "vendor/autoload.php";
use Twilio\Rest\Client;
echo "Hello";

$account_sid = 'AC32c17aff23ecfdf6230e30a840a4dec9' ;
$auth_token = '1519ad4273dddb8842acfe96291e8147';
$client = new Client($account_sid, $auth_token);




$client->messages->create(
'+16093391650',
array(

'From' => "+12018905156",
'Body' => "Hello from Dabre Primus CS643 Fall 2017"
));
echo "A SMS was sent";
?>

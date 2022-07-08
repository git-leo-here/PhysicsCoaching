<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('84361286231-cegga44v74cednvt07v0ceqjc5it12ph.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/mainsite_tested/index.php?class=11');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>  
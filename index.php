<?php

//index.php


//Include Configuration File
include('config.php');

$login_button = '';

// this $_GET["code"] variable contains the authorization code for the user.
//This $_GET["code"] variable value received after user has login into their Google Account with approval.
// After we receive the authorization code . the web server i.e. our website can exchange the authorization code for an access token.

if(isset($_GET["code"]))
{
 // We fetch the authorization token from Google in exchange of the authorization code to Google server
 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
  //We set the access token for the google client object , so that we can later request for the user data using this token
  $google_client->setAccessToken($token['access_token']);

  // We store the access token as a session variable so that we can access this token later. 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

    // We get the user profile info from google using the access token that we set earlier
  $data = $google_service->userinfo->get();

    // We set the user data in the session variable so that we can access it later
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }


  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{
 $login_button = '<a href="'.$google_client->createAuthUrl().'" class="login_btn" >login</a>';

//  $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>


   <?php
   if($login_button == '')
   {
    include './subject.php';

   }
   else
   {
    include './home.php';
   }
   ?>


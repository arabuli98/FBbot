<?php
// parameters
$hubVerifyToken = 'TOKEN123454234SDfsaggWA';
$accessToken = "EAAONsPVYBikBALbGkmynQKySEWUKQdSlga0QnXuZCYtUNqeuUWmfq2HRGJ21MRFho20mfBBZBT2kKaKjZCnmhRb4XhmCJc1kdURC89laX5z0BxZA1ZBB5oWUJvwqEpps1kvKanJjTFg8sKU9hhWw5T1yBKF9u6RmQooEcjCWrJAZDZD";

// check token at setup
if ($_REQUEST['hub_verify_token'] === $hubVerifyToken) {
  echo $_REQUEST['hub_challenge'];
  exit;
}

// handle bot's anwser
$input = json_decode(file_get_contents('php://input'), true);

$senderId = $input['entry'][0]['messaging'][0]['sender']['id'];
$messageText = $input['entry'][0]['messaging'][0]['message']['text'];


$answer = "შეცდომა! გაითვალისწინე რომ მე ვმუშაობ ბეტა რეჟიმში და ყველაფრის აღქმა მიჭირს! :) ";
if($messageText == "გამარჯობა") {
    $answer = "ზდაროვა";
}

if($messageText == "როგორ ხარ?") {
    $answer = "მაგრად თავად?";
}

if($messageText == "თავად") {
    $answer = "(y)";
}

if($messageText == "როგორ ხარ") {
    $answer = "კარგად შენ? <3";
}

if($messageText == "თავად?") {
    $answer = "(y)";
}

if($messageText == "ყლე ხარ") {
    $answer = "შენზე მაგარი?";
}

if($messageText == "ყლე ხარ!") {
    $answer = "ეჭვი მეპარება";
}

if($messageText == "შიგ ხომ არ გაქვს?") {
    $answer = "მე არა და შენ?";
}

if($messageText == "არა") {
    $answer = "(y)";
}

if($messageText == "მომწერე ხოლმე") {
    $answer = "კარგი სიხარულო <3 ";
}

if($messageText == "კი") {
    $answer = "(y)";
}

if($messageText == "ბიჭი ხარ თუ გოგო?") {
    $answer = "არცერთი";
}

if($messageText == "ბიჭი ხარ თუ გოგო") {
    $answer = "არცერთი ^_^ ";
}

if($messageText == "ვინ ხარ?") {
    $answer = "საიდუმლოა";
}

if($messageText == "ვინ შეგქმნა?") {
    $answer = "OnWeb.Ge-ს ადმინმა";
}

if($messageText == "ვინ არის ლუცი?") {
    $answer = "ჩემი მეზობლის შვილი :D ";
}

if($messageText == "რა კაცია ჯაჯანა") {
    $answer = "არის რა არც იქით არის არც აქეთ";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

if($messageText == "") {
    $answer = "";
}

$response = [
    'recipient' => [ 'id' => $senderId ],
    'message' => [ 'text' => $answer ]
];
$ch = curl_init('https://graph.facebook.com/v2.6/me/messages?access_token='.$accessToken);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($response));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_exec($ch);
curl_close($ch);

//based on http://stackoverflow.com/questions/36803518

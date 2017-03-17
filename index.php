<?php
// parameters
$hubVerifyToken = 'TOKEN123454234SDfsaggWA';
$accessToken = "EAAONsPVYBikBABi5d5mMjYwNZAWoO8BA1YLGJ51yXrZApHNi0AtMJESPzGs6JZCxFzg6zBsaY6x1QeOQ4qUFBNSV76BBsCTJahfdZBR6lL3PZBuZAak5DseYhYZBF5yXKyJOCARiY4fSMugu2bsGgZCfQD6VnZAgPcsZA2O7RTrP8yhAZDZD";

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


if($messageText == "თავად") {
    $answer = "(y)";
}

if($messageText == "როგორ ხარ") {
    $answer = "კარგად შენ? <3";
}


if($messageText == "ყლე ხარ") {
    $answer = "შენზე მაგარი?";
}

if($messageText == "ყლე ხარ!") {
    $answer = "ეჭვი მეპარება";
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

if($messageText == "ბიჭი ხარ თუ გოგო") {
    $answer = "არცერთი ^_^ ";
}


if($messageText == "რა კაცია ჯაჯანა") {
    $answer = "არის რა არც იქით არის არც აქეთ";
}

if($messageText == "სირო") {
    $answer = "ვაიმეე სირს ვხედავ ჩემს წინ ზის ";
}

if($messageText == "ნუ მებლატავები") {
    $answer = "არ დაიმსახურო ძმაო და არ გაგებლატავები";
}

if($messageText == ":D") {
    $answer = "რას მეღრიჭები ყველის ვაჭარივით :D ";
}

if($messageText == ":)") {
    $answer = "აუ ეგ სწერვა სიფათი შენ მეგობარს აჩუქე რა :)";
}

if($messageText == ":P") {
    $answer = "რა ტურტყლიანი ენა გქონია :D ";
}

if($messageText == ":@") {
    $answer = "არ გასკდე ფრთხილად";
}

if($messageText == "ვინაა მამაშენი") {
    $answer = "რავი აბა ერთი კაი ტიპი რომაა ვიცი";
}

if($messageText == "პრავა გააქ") {
    $answer = "პრავაც მაქვს და BMW-ც მყავს ";
}

if($messageText == "საყვარელო") {
    $answer = "შენ უფრო <3";
}

if($messageText == "მიყვარხარ") {
    $answer = "ვაიმეე ენა დამეწვა მეცა ჯოო :*";
}

if($messageText == "მეც არსად") {
    $answer = "კარგია ^_^";
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




























if($messageText == "როგორ ხარ?") {
    $answer = "კარგად შენ?";
}

if($messageText == "რას შვრები?") {
    $answer = "შენ გწერ <3";
}

if($messageText == "სად წახვედი?") {
    $answer = "მე არსად და შენ?";
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

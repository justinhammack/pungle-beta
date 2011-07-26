<?php

$regex = '/^(?:(?:(?:[^@,"\[\]\x5c\x00-\x20\x7f-\xff\.]|\x5c(?=[@,"\[\]\x5c\x00-\x20\x7f-\xff]))(?:[^@,"\[\]\x5c\x00-\x20\x7f-\xff\.]|(?<=\x5c)[@,"\[\]\x5c\x00-\x20\x7f-\xff]|\x5c(?=[@,"\[\]\x5c\x00-\x20\x7f-\xff])|\.(?=[^\.])){1,62}(?:[^@,"\[\]\x5c\x00-\x20\x7f-\xff\.]|(?<=\x5c)[@,"\[\]\x5c\x00-\x20\x7f-\xff])|[^@,"\[\]\x5c\x00-\x20\x7f-\xff\.]{1,2})|"(?:[^"]|(?<=\x5c)"){1,62}")@(?:(?!.{64})(?:[a-zA-Z0-9][a-zA-Z0-9-]{1,61}[a-zA-Z0-9]\.?|[a-zA-Z0-9]\.?)+\.(?:xn--[a-zA-Z0-9]+|[a-zA-Z]{2,6})|\[(?:[0-1]?\d?\d|2[0-4]\d|25[0-5])(?:\.(?:[0-1]?\d?\d|2[0-4]\d|25[0-5])){3}\])$/';

$jsonPATH = "core/pungleSURVEY.json";
$string = file_get_contents($jsonPATH);
$survey = json_decode($string,true);
$ip = $_SERVER['REMOTE_ADDR'];
$id = null;
$showREF = false;
$placeHOLDER = "Enter Email";
$referralCount = null;
$flashNotice = "";

foreach ($survey as $key => $value) {
    if ($ip == $survey[$key][user_ip]) {
        $id = $key;        
    }    
}

// can we find the email, or id
if (isset($_GET["update"])) {
    $update = $_GET["update"];                            
    
    // if returning ip update email, else search the json file for an email match and set the ID
    if (isset($id) && $survey[$id][email] != $update) {
        if (preg_match($regex, $update)) {
            $survey[$id][email] = $update;
            file_put_contents($jsonPATH, json_encode($survey));
            $flashNotice = "Updated email address.<br/>";
        }
        else $flashNotice = "Can not update email, invalid address.<br/>";
    }
    elseif ($id === null) {
        foreach ($survey as $key => $value) {
            if ($update == $survey[$key][email]) $id=$key;
        }
    }

    // if a match is still not found, create a new account and set the ID
    if ($id === null) {
        // check the email address syntax
        if (preg_match($regex, $update)) {
            $newuser = array("email" => $update, "user_ip" => $ip, "referrals" => array());
            array_push($survey, $newuser);
            $id = array_search($newuser, $survey);
            file_put_contents($jsonPATH, json_encode($survey));
            $flashNotice = "Share link created.<br/>";
        }
        // don't save bad email addresses
        else $flashNotice = "Unacceptable email address.<br/>";
    }
}
// if an ID is specified and we didn't find a user IP
elseif (isset($_GET["id"]) && $id === null) $id = $_GET["id"];


// ************* LOGIC *************
if (isset($id)) {
    // echo "Found ID: $id<br/>";
    
    // check if they are they are the original user
    if (isset($update) || $survey[$id][user_ip] == $ip) {
        $showREF = true;
        $placeHOLDER = $survey[$id][email];
        $referralCount = count($survey[$id][referrals]);
    }                            
    // else they are a possible referral, check for original user
    elseif ($survey[$id] && !in_array($ip, $survey[$id][referrals])) {
        // user is found, add this IP
        array_push($survey[$id][referrals], $ip);
        file_put_contents($jsonPATH, json_encode($survey));
        // echo "I see you were referred by a friend, see below on how you can get credit for referrals too!";
    }
    // DO THEY NEED TO SEE THIS?? original user not found, no referral credited
    // else echo "User not found or referral already counted.";
}
// else echo "You are an original user.";

?>

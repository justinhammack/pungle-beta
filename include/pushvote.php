<?php 

if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || $_SERVER['HTTP_REFERER']!="http://pungle.me/inject/") {
    die();
}

$jsonPATH = "../core/pungleCAUSES.json";
$cause = json_decode(file_get_contents($jsonPATH),true);

$causeID = (int)$_POST["c"];

if ($causeID >= 0 && $causeID <= 6) {
    $cause[$causeID]++;
    file_put_contents($jsonPATH, json_encode($cause));
}

?>

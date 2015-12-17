<?php

$db = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "befd2db9fe76ad",
    "5a698004",
    "WebApp_Coursework" );

// test our connection
if ($db->connect_errno) {
    die ('Connection Failed :'.$db->connect_error );
}

$conn = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "befd2db9fe76ad",
    "5a698004",
    "WebApp_Coursework" );


$queryAdventure = "SELECT * FROM adventure ";
$result = $db->query($queryAdventure);
if (!$result) {
    die('Nothing in result: ');
}

echo $queryAdventure;

$result->close();
$db->close();

?>
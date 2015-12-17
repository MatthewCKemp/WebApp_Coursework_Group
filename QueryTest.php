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


$query = "SELECT * FROM adventure WHERE 1";
$result = $db->query($query);
if (!$result) {
    die('Nothing in result: ');
}

$result->close();
$db->close();

?>
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

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM Adventures WHERE 1";
$result = $db->query($query);
if (!$result) {
    die('Nothing in result: ');
}

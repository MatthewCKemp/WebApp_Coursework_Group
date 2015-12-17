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

$query = "SELECT adventID FROM adventure WHERE advent_name = Scotland";
$result = $db->query($query);
if (!$result) {
    die('Nothing in result: ');
}
 //-------------------------------------

$dom = new DOMDocument("1.0");
$node = $dom->createElement("adventure");
$parnode = $dom->appendChild($node);


header("Content-type: text/xml");

// Iterate through the rows, adding XML nodes for each

while ($row = $result->fetch_array()){
    // ADD TO XML DOCUMENT NODE
    $node = $dom->createElement("adventure");
    $newnode = $parnode->appendChild($node);
    $newnode->setAttribute("adventID",$row['adventID']);
    $newnode->setAttribute("advent_name", $row['advent_name']);
    $newnode->setAttribute("advent_country", $row['advent_country']);
    $newnode->setAttribute("tagID", $row['tagID']);
    $newnode->setAttribute("userID", $row['userID']);
}

$result->close();
$db->close();

echo $dom->saveXML();
echo $query();

?>


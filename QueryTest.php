<?php
// connect to your Azure server and select database (remember you connection details are all on the azure portal
$db = new mysqli(
    "eu-cdbr-azure-west-c.cloudapp.net",
    "befd2db9fe76ad",
    "5a698004",
    "WebApp_Coursework"
);
// test if connection was established, and print any errors
if($db->connect_errno){
    die("Connection failed: " . $conn->connect_error);
}

$sql_query = "SELECT * FROM adventure";
// execute the SQL query
$result = $db->query($sql_query);

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
while($row = $result->fetch_array()){
    // print out fields from row of data
    echo "<p>” $row ['advent_name'] “</p>";
}

$result->close();
// close connection to database
$db->close();

?>
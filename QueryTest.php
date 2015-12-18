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
mysql_select_db('WebApp_Coursework')
    or die("Unable to connect to database: " . mysql_error());
    
$sql_query = "SELECT * FROM adventure";
// execute the SQL query
$result = mysql_query($query);

if(!$result) die ("Could not query: " . mysql_error());
$rows = mysql_num_rows($result);

for($j = 0; $j < $rows; ++$j)
{
    echo 'dirijabyl: ' . mysql_result($result, $j, 'adventID') . '</br>';
   
}

// iterate over $result object one $row at a time
// use fetch_array() to return an associative array
//while($row = $result->fetch_array()){
  //  // print out fields from row of data
    //echo $row ;
//}
$result->close();
// close connection to database
$db->close();


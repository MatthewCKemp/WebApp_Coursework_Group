<?php
// connect to your Azure server and select database (remember you connection details are all on the azure portal
//$db = new mysqli(
   // "eu-cdbr-azure-west-c.cloudapp.net",
    //"befd2db9fe76ad",
   // "5a698004",
   // "WebApp_Coursework"
//);
// test if connection was established, and print any errors
//if($db->connect_errno){
//    die("Connection failed: " . $conn->connect_error);
//}



$db_database = 'WebApp_Coursework';
$db_hostname = 'eu-cdbr-azure-west-c.cloudapp.net';
$db_username = 'befd2db9fe76ad';
$db_password = '5a698004';


$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if(!$db_server) die("Unable to connect to MYSQL: ". mysql_error());

mysql_select_db($db_database)
    or die("Unable to connect to database: " . mysql_error());
    
$query = "SELECT * FROM adventure";
// execute the SQL query
$result = mysql_query($query);

if(!$result) die ("Could not query: " . mysql_error());
$rows = mysql_num_rows($result);

for($j = 0; $j < $rows; ++$j)
{
    echo 'adventID: ' . mysql_result($result, $j, 'adventID') . '</br>';
   
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

 <h1>Adventure Page</h1>

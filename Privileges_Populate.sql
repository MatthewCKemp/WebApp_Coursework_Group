<?php
$conn = new mysqli(

    "eu-cdbr-azure-west-c.cloudapp.net"
    "befd2db9fe76ad"
    "5a698004"
    "WebApp_Coursework"
);

/*Establishes connection*/

//$conn - newmysqli($servername, $username, $password, $dbname);
/*Connection check*/
if ($conn->connect_error) {
  die("Connection has failed " . $conn->connect_error);
}
/* sql to populate Privileges table*/

$sql = "
INSERT INTO Privileges (privID, description) VALUES ('PR01', 'Basic User');
INSERT INTO Privileges (privID, description) VALUES ('PR02', 'Reader');
INSERT INTO Privileges (privID, description) VALUES ('PR03', 'Author');
INSERT INTO Privileges (privID, description) VALUES ('PR04', 'Admin');
INSERT INTO Privileges (privID, description) VALUES ('PR05', 'Admin and reader');
INSERT INTO Privileges (privID, description) VALUES ('PR06', 'Admin and author');
";

if ($conn->query($sql) === TRUE) {
  echo "Table markers created";
} else {
  echo "Error found creating table " . $conn->error;
}

$conn->close();
?>
<?php
$db = new mysqli(

    "eu-cdbr-azure-west-c.cloudapp.net",
    "befd2db9fe76ad",
    "5a698004",
    "WebApp_Coursework"
);

/*Establishes connection*/

//$conn - newmysqli($servername, $username, $password, $dbname);
/*Connection check*/
if ($db->connect_error) {
    die("Connection has failed " . $db->connect_error);
}

/*Creates sql table*/

$sql = "CREATE TABLE Users (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
userID  CHAR ( 4 ) NOT NULL,
name    VARCHAR( 40 ) NOT NULL,
country VARCHAR ( 30 ) NOT NULL,
email   VARCHAR ( 40 ) NOT NULL,
phone   INT
age     INT
reader  BIT,
author  BIT,
admin   BIT,
privID  CHAR ( 4 ) NOT NULL,

CONSTRAINT pkUser PRIMARY KEY (userID)
CONSTRAINT fk_privID FOREIGN KEY (privID) REFERENCES Privileges (privID),

) ENGINE = MYISAM ;
";

if ($db->query($sql) === TRUE) {
    echo "Table Users created";
} else {
    echo "Error found creating table " . $db->error;
}

$db->close();
?>

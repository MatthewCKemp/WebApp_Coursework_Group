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

/* sql to create the CONTRIBUTIONS table*/

$sql = "CREATE TABLE Images (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
imageID 	CHAR(4),
image		IMAGE,
userID 		CHAR(4) NOT NULL,

CONSTRAINT pk_imageID PRIMARY KEY imageID,
CONSTRAINT fk_userID FOREIGN KEY (userID) REFERENCES Users (userID),
) ENGINE = MYISAM ;
";



if ($conn->query($sql) === TRUE) {
  echo "Table Images created";
} else {
  echo "Error found creating table " . $conn->error;
}

$conn->close();
?>
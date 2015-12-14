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

/*populate Images table */
INSERT INTO Images (imageID, image, userID) VALUES ('I001', LOAD_FILE ('H:/DATABASE/Images/Spain1'), 'U001');
INSERT INTO Images (imageID, image, userID) VALUES ('I002', LOAD_FILE ('H:/DATABASE/Images/Glasgow1'), 'U001');
INSERT INTO Images (imageID, image, userID) VALUES ('I003', LOAD_FILE ('H:/DATABASE/Images/Stoneheaven1'), 'U001');
INSERT INTO Images (imageID, image, userID) VALUES ('I004', LOAD_FILE ('H:/DATABASE/Images/Praque1'), 'U002');
INSERT INTO Images (imageID, image, userID) VALUES ('I005', LOAD_FILE ('H:/DATABASE/Images/Paris1'), 'U002');
INSERT INTO Images (imageID, image, userID) VALUES ('I006', LOAD_FILE ('H:/DATABASE/Images/Rouen1'), 'U002');
INSERT INTO Images (imageID, image, userID) VALUES ('I007', LOAD_FILE ('H:/DATABASE/Images/NewYork1'), 'U003');
INSERT INTO Images (imageID, image, userID) VALUES ('I008', LOAD_FILE ('H:/DATABASE/Images/HoChiMinh1'), 'U003');
INSERT INTO Images (imageID, image, userID) VALUES ('I009', LOAD_FILE ('H:/DATABASE/Images/Jerusalem1'), 'U003');


if ($conn->query($sql) === TRUE) {
  echo "Table  created";
} else {
  echo "Error found creating table " . $conn->error;
}

$conn->close();
?>

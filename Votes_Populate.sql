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

/* sql to create table*/

$sql = "
INSERT INTO votes (voteID, Type, userID) VALUES (V001, 'UP', U002);
INSERT INTO votes (voteID, Type, userID) VALUES (V002, 'UP', U002);
INSERT INTO votes (voteID, Type, userID) VALUES (V003, 'DOWN', U001);
INSERT INTO votes (voteID, Type, userID) VALUES (V004, 'DOWN', U004);
INSERT INTO votes (voteID, Type, userID) VALUES (V005, 'UP', U007);
INSERT INTO votes (voteID, Type, userID) VALUES (V006, 'DOWN', U007);
INSERT INTO votes (voteID, Type, userID) VALUES (V007, 'DOWN', U008);
INSERT INTO votes (voteID, Type, userID) VALUES (V008, 'UP', U009);
INSERT INTO votes (voteID, Type, userID) VALUES (V009, 'UP', U009);
INSERT INTO votes (voteID, Type, userID) VALUES (V0010, 'UP', U005);
INSERT INTO votes (voteID, Type, userID) VALUES (V0011, 'UP', U007);
INSERT INTO votes (voteID, Type, userID) VALUES (V0012, 'DOWN', U007);
INSERT INTO votes (voteID, Type, userID) VALUES (V0013, 'UP', U009);
INSERT INTO votes (voteID, Type, userID) VALUES (V0014, 'UP', U001);
INSERT INTO votes (voteID, Type, userID) VALUES (V0015, 'DOWN', U003);
INSERT INTO votes (voteID, Type, userID) VALUES (V0016, 'UP', U001);
";


if ($conn->query($sql) === TRUE) {
  echo "Table markers created";
} else {
  echo "Error found creating table " . $conn->error;
}

$conn->close();
?>
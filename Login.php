<?php
$db_database = 'WebApp_Coursework';
 $db_hostname = 'eu-cdbr-azure-west-c.cloudapp.net';
 $db_username = 'befd2db9fe76ad';
 $db_password = '5a698004';
 
if ($db->connect_errno) {
    die('connection has failed :'.$db->connect_error);
}
else {
    echo "<p> Successfuly Connected</p>";
}

session_start(); // Starts Session
//echo "<p> starts a session</p>";
$error=''; // Simple variable which stores an error message if there is one

    if (isset($_POST['email']) && isset($_POST['password'])) {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            $error = "Email or Password is invalid";
            echo "<br>";
            echo "<a href='index.php'>" . "Click here to enter again" . "</a>";
        }


// Defines the variables $username and $password
        $email = $_POST['email'];
        $password = $_POST['password'];
// Establishes a Connection with the Server by passing server_name, user_id and password as a parameter
// To protect MySQL injection for Security purpose
        $email = starwarsisgreat($email);
        $password = starwarsisgreat($password);

// This SQL query gets the information of already registerd users and finds their match.
        $query = "select * from logins where pword='".$password."' AND email='".$email."'";
        $result = $db->query($query);
        if(isset($result)){
            $rows = $result->fetch_array();

            //  while () {
            if (count($rows)> 0) {

                $_SESSION['login_user'] = $email; // Starts the Session
                header("location: author.php"); // Redirects To Author Page
            } else {
                $error = "Email or Password is not valid";

            }
            $result->close();
        }
        else{
            echo "no results";
        }

       // }
    }


echo $error;

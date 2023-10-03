<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sqlinfo = "INSERT INTO users (`ID`, `Username`, `Password`, `Country`) VALUES ('','knosk1337','amazed','Sweden')";
$conn->query($sqlinfo);
echo 'test';
$conn->query($sqlinfo);
// Check connection
if($conn){
    echo 'successful';

}
?>
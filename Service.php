<?php

//header('Access-Control-Allow-Origin: *'); //NOTE: Cross domain enable if know what your doing ...
//header('Access-Control-Allow-Methods: POST');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Demo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sth = mysqli_query($conn,"SELECT * FROM Demo");
$rows = array();
while($r = mysqli_fetch_assoc($sth)) {
    $rows[] = $r;
}
print json_encode($rows);

$conn->close();
?>
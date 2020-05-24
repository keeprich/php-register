<?php
$servername = "localhost";
$username = "keeprich";
$password = "keeprich";
$dbName = "attendancePhpApp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
// if ($conn->connect_error) {
//   die("Connection failed: " . $conn->connect_error);
// }
// echo "Connected successfully";


// $sql = "INSERT INTO attend (eID, timeRec)
// VALUES ('106', '10:40')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

?>
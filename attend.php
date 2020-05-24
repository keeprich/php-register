

<?php

require_once "dbConnection.php";


$user_id = 0;
$eID = 0;
$timeRec = '';


if (isset($_POST['save'])){
$eID = $_POST['eID'];
$timeRec = $_POST['timeRec'];

$conn->query("INSERT INTO attend(eID, timeRec) VALUES('$eID', '$timeRec')") or
    die($mysqli->error);

    header("location: view.php");



}

// if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//     }
//     echo "Connected successfully";
    
    
//     $sql = "INSERT INTO attend (eID, timeRec)
//     VALUES ('106', '10:40')";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "New record created successfully";
//     } else {
//       echo "Error: " . $sql . "<br>" . $conn->error;
//     }







?>
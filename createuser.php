<?php

require_once('connection.php');

if ($conn->connect_error) {
	echo "Something has gone wrong!";
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (username)
VALUES ('Fake User')";

if ($conn->query($sql) === TRUE) {
    header( "Location: index.php" ); 
      exit; 
} else {
    //echo "Something has gone wrong!";
}

$conn->close();

?>

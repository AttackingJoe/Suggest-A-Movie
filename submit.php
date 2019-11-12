<?php

require_once('connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO movies (title)
VALUES ('$_POST[title]')";

if ($conn->query($sql) === TRUE) {
    header( "Location: index.php" ); 
      exit; 
} else {
    //echo "Something has gone wrong!";
}

$conn->close();

?>

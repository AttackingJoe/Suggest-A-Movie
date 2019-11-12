<?php

require_once('connection.php');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM movies";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "title: " . $row["title"]."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
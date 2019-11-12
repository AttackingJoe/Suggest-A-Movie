
<!DOCTYPE html>
<html>
<head>
<title>PHP insertion</title>
<link href="css/insert.css" rel="stylesheet">
</head>
<body>
<div class="maindiv">
<!--HTML Form -->
<div class="form_div">
<div class="title">
<h2>Insert Data In Database Using PHP.</h2>
</div>
<form action="submit.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Form</h2>
<label>Movie:</label>
<input class="input" name="title" type="text" value="">
<input class="submit" name="submit" type="submit" value="Submit">
</form>
</div>
</div>
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
</body>
</html>
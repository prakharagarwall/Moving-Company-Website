<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "moving_company";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_GET["id"];
// sql to delete a record
$sql = "DELETE FROM book WHERE booking_id=".$id;
echo $sql;
if ($conn->query($sql) === TRUE) {

    echo "Record deleted successfully";
    header("location: index3.php");
     exit();
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 

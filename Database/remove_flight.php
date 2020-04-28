<?php
include_once 'connection.php';

$flight_no = $_POST['flight_no'];


$sql = "DELETE FROM flight WHERE flight_no = '$flight_no'";

if ($conn->query($sql) === TRUE) {
    echo "Flight removed successfully!";
}
else {
    echo "Error removing flight. " . $conn->error;
}  

$conn->close();
?>
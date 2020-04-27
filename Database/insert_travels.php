<?php
include_once 'connection.php';

$sql = "INSERT INTO travels 
VALUES ('D1D7V','95371210')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
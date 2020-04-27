<?php
include_once 'connection.php';

$sql = "SELECT flight_no FROM flight";
$result = $conn->query($sql); 


if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "flight number:" . $row["flight_no"].  "<br>";
    }
} else {
    echo "No results found";
}


$conn->close();

?>
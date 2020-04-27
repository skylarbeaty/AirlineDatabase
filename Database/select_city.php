<?php
include_once 'connection.php';

$sql = "SELECT destination_city FROM flight";
$result = $conn->query($sql); 

if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Destination City:" . $row["destination_city"].  "<br>";
    }
} else {
    echo "No results found";
}

echo "<br>";

$sql = "SELECT departure_city FROM flight";
$result = $conn->query($sql); 

if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Departure City:" . $row["departure_city"].  "<br>";
    }
} else {
    echo "No results found";
}




$conn->close();

?>
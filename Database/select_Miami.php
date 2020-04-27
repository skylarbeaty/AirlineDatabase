<?php
include_once 'connection.php';

$sql = "SELECT * FROM flight where destination_city = 'Miami'";
$result = $conn->query($sql); 


if ($result && $result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "flight to Miami: flight number-" . $row["flight_no"].  "<br>";
        echo "Departure city:" . $row["departure_city"].  "<br>";
        echo "Time:" . $row["departure_time"].  "<br>";
        echo "Available Seats:" . $row["empty_seats"].  "<br>";
    }
} else {
    echo "No results found";
}


$conn->close();

?>
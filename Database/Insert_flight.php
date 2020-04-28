<?php
include_once 'connection.php';

$flight_no = $_POST['flight_no'];
$destination_city = $_POST['destination_city'];
$departure_city = $_POST['departure_city'];
$departure_time = $_POST['departure_time'];
$arrival_time = $_POST['arrival_time'];
$flight_length = $_POST['flight_length'];
//$boarding_time = $_POST['boardingtime'];
$total_passengers = $_POST['total_passengers'];
$total_seats = $_POST['total_seats'];
$empty_seats = $_POST['empty_seats'];
$flight_type = $_POST['flight_type'];
$distance = $_POST['distance'];
$departure_date = $_POST['departure_date'];
$arrival_date = $_POST['arrival_date'];

//if (isset($flight_no)) {
	//echo "This info is rachet!";
}
$sql = "INSERT INTO flight VALUES ('$flight_no', '$destination_city', '$departure_city', '$departure_time ','$arrival_time', '$flight_length ', '$total_passengers', '$total_seats', '$empty_seats', '$flight_type', '$distance', '$departure_date ', '$arrival_date' )";

if ($conn->query($sql) === TRUE) {
    echo "New flight inserted successfully";
} else {
    echo "Error: couldn't insert flight " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
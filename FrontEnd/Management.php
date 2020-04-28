<?php
    include_once 'connection.php';
?>
<html>
<head>
    <link rel="stylesheet" href="main.css"> 
    <!-- fonts: montserrat, alegreya --> <link href="https://fonts.googleapis.com/css?family=Alegreya|Montserrat|Indie+Flower" rel="stylesheet">
    <!-- bootstrap --> <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="emuIcon.png">
    <title>Emu Air</title>
</head>
<body>
    <div class = "header row">
        <div class="col-lg-3 col-sm-0"></div>
        <div class="col-lg-6">
            <div class="row" style="padding-left: 15px;">
            <img src = "emuIcon.png" style = "width: 80px; height: 80px;">
                <div style="display: inline-block; padding-left: 10px;">
                    <h1>Emu Air<br/></h1>
                    <p style="padding-left: 5px;">what would an emu do</p>
                </div>
            </div>
            <div class="table" >
                <ul>
                    <li><a href="Search.html"><p>Search</p></a></li>
                    <li><a href="#"><p class="currentPage">Management</p></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-0"></div>
    </div>
    <div class = "row">
        <div class="col-lg-3 col-sm-0"></div>
        <div class="col-lg-3">
            <h2 style="padding-top: 50px; padding-bottom: 20px;">Add A Flight</h2>
            <form action="Insert_flight.php" method="POST">
                <label>Flight Number</label>
                    <input type="text" name="flight_no"><br/>
                <label>Desitination City</label> 
                    <input type="text" name="destination_city"><br/>
                <label>Departure City</label>
                    <input type="text" name="departure_city"><br/>
                <label>Departure Time</label> 
                    <input type="time" name="departure_time"><br/>
                <label>Arrival Time</label> 
                    <input type="time" name="arrival_time"><br/>
                <label>Flight Length</label> 
                    <input type="number" name="flight_length"><br/>
                <!--<label>Boarding Time</label> 
                    <input type="time" name="boarding_time"><br/>-->
                <label>Total Passengers</label> 
                    <input type="number" name="total_passengers"><br/>
                <label>Total Seats</label> 
                    <input type="number" name="total_seats"><br/>
                <label>Empty Seats</label> 
                    <input type="number" name="empty_seats"><br/>
                <label>Flight Type</label> 
                    <input type="text" name="flight_type"><br/>
                <label>Distance</label> 
                    <input type="number" name="distance"><br/>   
                <label>Departure Date</label> 
                    <input type="date" name="departure_date"><br/>
                <label>Arrival Date</label> 
                    <input type="date" name="arrival_date"><br/><br/>  
                <input type="submit" value="insert">
            </form>
        </div>
        <div class="col-lg-3">
            <h2 style="padding-top: 50px; padding-bottom: 20px;">Remove A Flight</h2>
            <form action="remove_flight.php" method="POST">
                <label>Flight Number</label> <input type="text" name="flight_no"><br/>
                <input type="submit" value="remove">
            </form>
        </div>
        <div class="col-lg-3 col-sm-0"></div>
        <!-- <?php
        include_once 'connection.php';

        if (isset($_POST['submit'])){
            switch($_POST['submit']) {
            case 'insert': 
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
                
                
                $sql = "INSERT INTO flight VALUES ('$flight_no', '$destination_city', '$departure_city', '$departure_time ','$arrival_time', '$flight_length ', '$total_passengers', '$total_seats', '$empty_seats', '$flight_type', '$distance', '$departure_date ', '$arrival_date' )";
                
                
                if ($conn->query($sql) === TRUE) {
                    echo "New flight inserted successfully";
                } else {
                    echo "Error: couldn't insert flight " . $sql . "<br>" . $conn->error;
                }
            break;
            case 'remove':
                $flight_no = $_POST['flight_no'];


                $sql = "DELETE FROM flight WHERE flight_no = '$flight_no'";
                
                if ($conn->query($sql) === TRUE) {
                    echo "Flight removed successfully!";
                }
                else {
                    echo "Error removing flight. " . $conn->error;
                }  
            break;
            } 
        }
        $conn->close();
        ?> -->
</body>
</html>
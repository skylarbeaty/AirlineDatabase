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
                    <li><a href="Management.php"><p>Management</p></a></li>
                </ul>
            </div>
        </div>
        <div class="col-lg-3 col-sm-0"></div>
    </div>

    <div class = "row">
        <div class="col-lg-3 col-sm-0"></div>
        <div class="col-lg-6">
            <?php
            include_once 'connection.php';

            //if (isset($_POST['submit'])){
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

            //}
            $conn->close();
            ?>
        </div>
        <div class="col-lg-3 col-sm-0"></div>
    </div>
</body>
</html>